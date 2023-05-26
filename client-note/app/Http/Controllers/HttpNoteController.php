<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Http\Requests\NoteStoreUpdateRequest;

class HttpNoteController extends Controller
{
    private $url_base = 'http://127.0.0.1:8000/api/v1/notes/';

    public function index()
    {
        $response = Http::get($this->url_base);
        $notes = $response->json();

        //dd($notes['data']);
        return view('notes.index', ['notes' => $notes['data']]);
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(NoteStoreUpdateRequest $request)
    {
        $response = Http::post($this->url_base, [
            'content' => $request->content
        ]);

        //dd($response);
        return to_route('notes.index');
    }

    public function show($id)
    {
        $response = Http::get($this->url_base . $id);
        $note = $response->json();

        //dd($note['data']);
        return view('notes.show', ['note' => $note['data']]);
    }

    public function edit($id)
    {
        $response = Http::get($this->url_base . $id);
        $note = $response->json();

        //dd($note['data']);
        return view('notes.edit', ['note' => $note['data']]);
    }

    public function update(NoteStoreUpdateRequest $request, $id)
    {
        $response = Http::put($this->url_base . $id, [
            'content' => $request->content
        ]);

        //dd($response);
        return to_route('notes.index');
    }

    public function destroy($id)
    {
        $response = Http::delete($this->url_base . $id);

        //dd($response);
        return to_route('notes.index');
    }
}
