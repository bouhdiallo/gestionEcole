<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;


class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        return view('notes.liste_note');
    }


    public function ajout_note()
    {
        return view('notes.ajouter');  
        
    }


    public function ajout_note_traitement(Request $request)
    {

         $request->validate([
        'matiere' => 'required', 
         'note' => 'required'

         ]);

         $notes = new Note ();
        
        $notes->matiere = $request->matiere;
         $notes->note = $request->note;
         $notes->save();
         return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $classe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $classe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $classe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $classe)
    {
        //
    }
}
