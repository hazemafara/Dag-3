<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AllergyController extends Controller
{
    public function index(){
        $familyDetails = DB::table('families')
        ->select(
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

            return view('allergies',['familyDetails'=>$familyDetails]);
    }
}
