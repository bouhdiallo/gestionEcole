<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eleve;
use Illuminate\Support\Facades\DB;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eleves = Eleve::all();
        return view('/eleves/listEleve', ['eleves' => $eleves]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$categorie = Eleve::all();
        return view('/eleves/addEleve');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        $validate = $request->validate([
            'nom' => 'required|regex:/^[a-zA-Z0-9-ÿ\s]{2,50}$/',
            'prenom' => 'required|regex:/^[a-zA-Z0-9-ÿ\s]{2,50}$/',
            'sexe' => 'required|regex:/^[a-z]$/',
        ]);

        dd($validate);
        $categorie = new Eleve();
        $categorie ->EleveName = $validate['Eleve'];
        $categorie->save();
        return redirect()->route('addEleve')->with('status','Your Eleve has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Eleve = DB::table('eleves')->where('EleveId', $id)->first();
     
        return view('/eleves/editEleve', ['Eleve' => $Eleve]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validate = $request->validate([
            'Eleve' => 'required|regex:/^[a-zA-Z0-9-ÿ\s]{2,50}$/',
        ]); 
        DB::table('eleves')
        ->where('EleveId',  $request ->idEleve)
        ->update(['EleveName' => $validate['Eleve']]);
        return redirect()->back()->with('status','Your Eleve has been added');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {     
         DB::table('eleves')
         ->where('EleveId', $request->idEleve)
         ->delete();
         return redirect()->back()->with('status','Your Eleve has been deleted');
    }
}
