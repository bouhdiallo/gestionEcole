<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Eleve;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;


class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $notes=Note::all();
        return view('notes.liste_note',compact('notes'));
    }


    public function ajout_note()
    {
        $eleves = Eleve::all();
        return view('notes.ajouter', ['eleves' => $eleves]);
        
        
    }


    public function ajout_note_traitement(Request $request)
    {

         $request->validate([
            'matiere' => 'required|alpha|max:20', 
            'note' => 'required|numeric|between:0,10'
         ]);

         $notes = new Note ();
        
        $notes->eleve_id = $request->eleveId;
        $notes->matiere = $request->matiere;
         $notes->note = $request->note;
         $notes->save();
         return back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $eleves = Eleve::all();
        $note=Note::find($id);
        //dd($eleves);
        return view('notes.update',compact('note','eleves'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $classe)
    {
        //
    }
    public function rules()
    {
        return [
            'matiere' => 'required',
            'note' => 'required',

            
        ];
    }
    public function messages()
    {
        return [
            'matiere.required' => 'Desolé! Le champ matiere est obligatoire Veuillez le renseignez SVP',
            'note.required' => 'Desolé! Le champ note est obligatoire Veuillez le renseignez SVP',
        ];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate($this->rules(), $this->messages());
        $note=Note::find($id);
        $note->eleve_id = $request->eleveId;
        $note->matiere = $request->matiere;
        $note->note = $request->note;
        $note->save();
        return redirect()->route('index')->with('success', 'Note Modifier avec succèss');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $note = Note::find($id);
        $note->delete();
        return redirect()->route('index')->with('success', 'Note supprimé avec succès');
    }
}
