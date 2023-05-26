<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Http\Requests\NoteRequest;
use App\Http\Resources\NoteResource;

class NoteController extends Controller
{
    public function index()
    {
        return NoteResource::collection(Note::all());
    }

    public function store(NoteRequest $request)
    {
        Note::create($request->validated());
    }

    public function show(Note $note)
    {
        return new NoteResource($note);
    }

    public function update(NoteRequest $request, Note $note)
    {
        $note->update($request->validated());
    }

    public function destroy(Note $note)
    {
        $note->delete();
    }
}
