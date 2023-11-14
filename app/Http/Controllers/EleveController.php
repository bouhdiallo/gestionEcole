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
            'dateNaissance' => 'date:Y-m-d|before:today|after:1900-01-01',
        ]);

        $categorie = new Eleve();
        $categorie->nom = $request->nom;
        $categorie->prenom = $request->prenom;
        $categorie->classe = $request->classe;
        $categorie->sexe = $request->sexe;
        $categorie->dateNaissance = $request->dateNaissance;
        $categorie->save();
        return redirect()->route('addEleve')->with('status', 'Your Eleve has been added');
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
        $eleve = DB::table('eleves')->where('id', $id)->first();
       // dd($eleve->nom);
        return view('/eleves/editEleve', ['eleves' => $eleve]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        Eleve::findOrFail($request->idEleve);
        $validate = $request->validate([
            'nom' => 'required|regex:/^[a-zA-Z0-9-ÿ\s]{2,50}$/',
            'prenom' => 'required|regex:/^[a-zA-Z0-9-ÿ\s]{2,50}$/',
            'sexe' => 'required|regex:/^[a-z]$/',
            'dateNaissance' => 'date:Y-m-d|before:today|after:1900-01-01',
        ]);
         //dd($request->idEleve);
        DB::table('eleves')
            ->where('id',  $request->idEleve)
            ->update([
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'sexe' => $request->sexe,
                'dateNaissance' => $request->dateNaissance
            ]);
        return redirect()->back()->with('status', 'Your Eleve has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //dd($request-> idEleve);
        Eleve::findOrFail($request->idEleve);
        DB::table('eleves')
            ->where('id', $request->idEleve)
            ->delete();
        return redirect()->back()->with('status', 'Your Eleve has been deleted');
    }
}
