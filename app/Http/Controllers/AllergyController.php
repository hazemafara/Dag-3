<?php

namespace App\Http\Controllers;

use App\Models\Allergy;
use App\Models\AllergyPerPerson;
use App\Models\Person;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AllergyController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        // Query to get family details along with their representative and allergies
        $familyDetails = DB::table('families')
            ->select(
                'families.id as FamilyId',
                'families.name as FamilyName',
                'families.description as FamilyDescription',
                'families.amount_adults as Adults',
                'families.amount_kids as Kids',
                'families.amount_babies as Babies',
                DB::raw("CONCAT_WS(' ', representative.FirstName, representative.MiddleName, representative.LastName) as RepresentativeName"),
                'allergies.Name as AllergyName',
                'allergies.Description as AllergyDescription'
            )
            ->leftJoin('people as representative', function ($join) {
                $join->on('families.id', '=', 'representative.FamilyId')
                    ->where('representative.IsRepresentative', '=', 1);
            })
            ->leftJoin('allergy_per_person', 'representative.id', '=', 'allergy_per_person.person_id')
            ->leftJoin('allergies', 'allergy_per_person.allergy_id', '=', 'allergies.id')
            ->get();

        // Fetch all allergies for the dropdown
        $allergies = Allergy::all();

        // Return the view with the fetched data
        return view('allergies.index', compact('familyDetails', 'allergies'));
    }

    // Filter families by allergy category
    public function filterByCategory(Request $request)
    {
        $allergyId = $request->input('allergy');

        // Fetch all allergies for the dropdown
        $allergies = Allergy::all();

        // Initialize query to fetch family details
        $query = DB::table('families')
        ->select(
            'families.id as FamilyId',
            'families.name as FamilyName',
            'families.description as FamilyDescription',
            'families.amount_adults as Adults',
            'families.amount_kids as Kids',
            'families.amount_babies as Babies',
            DB::raw("CONCAT_WS(' ', representative.FirstName, representative.MiddleName, representative.LastName) as RepresentativeName"),
            DB::raw("GROUP_CONCAT(DISTINCT allergies.Name SEPARATOR ', ') as AllergyName"),
            DB::raw("GROUP_CONCAT(DISTINCT allergies.Description SEPARATOR ', ') as AllergyDescription")
        )
        ->leftJoin('people as representative', function ($join) {
            $join->on('families.id', '=', 'representative.FamilyId')
            ->where('representative.IsRepresentative', '=', 1);
        })
        ->leftJoin('people as member', 'families.id', '=', 'member.FamilyId')
        ->leftJoin('allergy_per_person', 'member.id', '=', 'allergy_per_person.person_id')
        ->leftJoin('allergies', 'allergy_per_person.allergy_id', '=', 'allergies.id')
        ->groupBy('families.id', 'representative.FirstName', 'representative.MiddleName', 'representative.LastName');

        // Apply the allergy filter only if a specific allergy is selected
        if (!empty($allergyId)) {
            $query->where('allergies.id', '=', $allergyId);
        }

        // Execute the query and get the results
        $families = $query->get();

        // Pass data to the view
        return view('allergies', [
            'allergies' => $allergies,
            'familyDetails' => $families,
        ]);
    }



    // Show the details of a specific allergy
    public function allergyDetails($id)
    {
        // Query to get detailed information about a specific allergy
        $allergyDetails = DB::table('families')
            ->select(
                'families.name as FamilyName',
                'families.description as FamilyDescription',
                'families.total_amount_people as TotalPeople',
                'people.id as personId',
                'people.FirstName as PersonFirstName',
                'people.LastName as PersonLastName',
                'people.PersonType as PersonType',
                'people.IsRepresentative as IsRepresentative',
                'allergies.Name as AllergyName',
                'allergies.Description as AllergyDescription'
            )
            ->leftJoin('people', 'families.id', '=', 'people.FamilyId')
            ->leftJoin('allergy_per_person', 'people.id', '=', 'allergy_per_person.person_id')
            ->leftJoin('allergies', 'allergy_per_person.allergy_id', '=', 'allergies.id')
            ->where('families.id', $id)
            ->orderBy('families.name')
            ->get();

        // Return the view with the fetched data
        return view('details', ['allergyDetails' => $allergyDetails]);
    }

    // Edit allergy information for a person
    public function edit($id)
    {
        try {
            // Fetch the person by ID
            $person = DB::table('people')->where('id', $id)->first();

            // If person not found, redirect with error
            if (!$person) {
                return redirect()->route('allergies.index')->with('error', 'Person not found');
            }

            // Fetch the allergy information for the person
            $allergy = DB::table('allergy_per_person')
            ->join('allergies', 'allergy_per_person.allergy_id', '=', 'allergies.id')
            ->where('allergy_per_person.person_id', $id)
            ->select('allergies.*')
            ->first();

            // Fetch all allergies for the dropdown
            $allergies = Allergy::all();

            // Return the edit view with the fetched data
            return view('allergies.edit', compact('allergy', 'allergies', 'person'));
        } catch (\Exception $e) {
            // Log the error
            logger()->error('Error in edit method: ' . $e->getMessage());

            // Redirect with an error message
            return redirect()->route('allergies.index')->with('error', 'Failed to fetch person details');
        }
    }

    // Update allergy information for a person
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'allergy' => 'required|exists:allergies,id',
        ]);

        // Perform database operations inside a transaction
        DB::transaction(function () use ($validatedData, $id) {
            // Find the allergy for the selected ID
            $persoonId = $id;

            // Update the allergy for the person
            $allergiePerPersoon = AllergyPerPerson::where('person_id', $persoonId)->firstOrFail();
            $allergiePerPersoon->allergy_id = $validatedData['allergy'];
            $allergiePerPersoon->save();
        });

        // Get the FamilyId for the person
        $familyId = Person::where('id', $id)->value('FamilyId');

        // Redirect to the family detail page with success message
        return redirect()->route('family.detail', ['id' => $familyId])
            ->with('success', 'De wijziging is doorgevoerd');
    }
}
