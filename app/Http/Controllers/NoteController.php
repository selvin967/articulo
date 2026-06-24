<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\Category;
use App\Http\Requests\NoteRequest;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('Note.index', compact('notes'));
    }

    public function create(){
        $note = new Note();
        $categories = Category::all();
        return view('Note.create', compact('note', 'categories'));
    }

    public function store(NoteRequest $request){
        Note::create($request->validated());
        return redirect()->route('notes.index')->with('success', 'Nota creada exitosamente.');
    }

    public function show(string $id){
        $note = Note::findOrFail($id);
        return view('Note.show', compact('note'));
    }

    public function edit(string $id){
        $note = Note::findOrFail($id);
        return view('Note.edit', compact('note'));
    }

    public function update(NoteRequest $request, Note $note){
        $note->update($request->validated());
        return redirect()->route('notes.index')->with('success', 'Nota actualizada exitosamente.');
    }

    public function destroy(string $id){
        $note = Note::findOrFail($id);
        $note->delete();
        return redirect()->route('notes.index')->with('success', 'Nota eliminada exitosamente.');
    }
}
