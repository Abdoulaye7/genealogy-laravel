<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\People;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function create(){
        return view('people.create');
    }
    public function store(StorePostRequest $storePostRequest){
        $people = People::create($storePostRequest->validated());

        return redirect()->route('people.index')->with('success','Ajout avec succès');
    }
    /*public function store(Request $request){
        $people = People::create([
            'created_by' => $request->input('created_by'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'birth_name' => $request->input('birth_name'),
            'middle_names' => $request->input('middle_names'),
            'date_of_birth' => $request->input('date_of_birth'),

        ]);
        dd($people);
    }*/
    public function index(){
        $peoples = People::paginate(10);

        return view('people.index',[
            'peoples' => $peoples
        ]);
    }
}
