<?php

namespace App\Http\Controllers;
use App\Models\Allergy;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AllergyController extends Controller
{
    public function index()
    {
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

        $allergies = Allergy::all();

        return view('allergies.index', compact('familyDetails', 'allergies'));
    }
    public function filterByCategory(Request $request)
    {
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
            'allergies.Name as AllergyName',
            'allergies.Description as AllergyDescription'
        )
            ->leftJoin('people as representative', function ($join) {
                $join->on('families.id', '=', 'representative.FamilyId')
                ->where('representative.IsRepresentative', '=', 1);
            })
            ->leftJoin('allergy_per_person', 'representative.id', '=', 'allergy_per_person.person_id')
            ->leftJoin('allergies', 'allergy_per_person.allergy_id', '=', 'allergies.id');

        // Filter by allergy if selected in dropdown
        if ($request->filled('allergy')) {
            $allergyId = $request->input('allergy');
            $query->where('allergies.id', $allergyId);
        }

        // Execute the query
        $familyDetails = $query->get();

        // Pass data to the view
        return view('allergies', [
            'allergies' => $allergies,
            'familyDetails' => $familyDetails,
        ]);
    }
public function allergyDetails($id){
        $allergyDetails = DB::table('families')
            ->select(
                'families.name as FamilyName',
                'families.description as FamilyDescription',
                'families.total_amount_people as TotalPeople',
                'people.FirstName as PersonFirstName',
                'people.LastName as PersonLastName',
                'people.PersonType as PersonType',
                'allergies.Name as AllergyName',
                'allergies.Description as AllergyDescription'
            )
            ->leftJoin('people', 'families.id', '=', 'people.FamilyId')
            ->leftJoin('allergy_per_person', 'people.id', '=', 'allergy_per_person.person_id')
            ->leftJoin('allergies', 'allergy_per_person.allergy_id', '=', 'allergies.id')
            ->where('families.id', $id) // Filter by specific family ID
            ->orderBy('families.name')
            ->get();


        return view('details', ['allergyDetails' => $allergyDetails]);}
    

    
}
