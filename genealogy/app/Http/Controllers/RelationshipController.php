<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Models\Relationship;
use Illuminate\Http\Request;

class RelationshipController extends Controller
{
    //

    public function create(){

        $people = People::all();

        return view('relationship.create',compact('people'));
    }
    public function store(Request $request){
        // Valider les données
    $validated = $request->validate([
        'parent_id' => 'required|exists:people,id',
        'child_id' => 'required|exists:people,id',
        'created_by' => 'required|exists:users,id',
    ]);

    // Créer la relation
    Relationship::create($validated);

    return redirect()->route('relationships.index')->with('success', 'Relation ajoutée avec succès');
    }
    public function index(){

        $relationships = Relationship::with(['parent', 'child'])->get();

        return view('relationship.index',compact('relationships'));
    }
}
