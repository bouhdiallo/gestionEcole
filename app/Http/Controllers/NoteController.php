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
<<<<<<< HEAD
        $notes=Note::all();
        return view('notes.liste_note',compact('notes'));
=======
        return view('notes.liste_note');
>>>>>>> feature/bouh
    }


    public function ajout_note()
    {
        return view('notes.ajouter');  
        
    }


    public function ajout_note_traitement(Request $request)
    {

         $request->validate([
<<<<<<< HEAD
        'matiere' => 'required', 
         'note' => 'required'

=======
            'matiere' => 'required|alpha|max:20', 
            'note' => 'required|numeric|between:0,10'
>>>>>>> feature/bouh
         ]);

         $notes = new Note ();
        
        $notes->matiere = $request->matiere;
         $notes->note = $request->note;
         $notes->save();
<<<<<<< HEAD
         return redirect()->route('index')->with('status', 'la note de l eleve a bien ete enregistré');
=======
         return back();
>>>>>>> feature/bouh
    }

    /**
     * Display the specified resource.
     */
<<<<<<< HEAD
    public function show($id)
=======
    public function show(Note $classe)
>>>>>>> feature/bouh
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
<<<<<<< HEAD
    public function update(Request $request, $id)
=======
    public function update(Request $request, Note $classe)
>>>>>>> feature/bouh
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
<<<<<<< HEAD
    public function destroy($id)
=======
    public function destroy(Note $classe)
>>>>>>> feature/bouh
    {
        $note = Note::find($id);
        $note->delete();
        return redirect()->route('index')->with('success', 'Note supprimé avec succès');
    }
}
