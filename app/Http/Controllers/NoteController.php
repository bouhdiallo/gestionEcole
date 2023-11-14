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
        $notes=Note::all();
        return view('notes.liste_note',compact('notes'));
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
         return redirect()->route('index')->with('status', 'la note de l eleve a bien ete enregistré');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $note=Note::find($id);
        return view('notes.update',compact('note'));
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
