<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $notes= Notes::all();
        return view('notes.index' ,['notes'=>$notes]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('notes.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $validatedData = $request->validate([
        'title' => 'required',
        'content' => 'required',
    ]);


    $note = Notes::create([
        'title' => $validatedData['title'],
        'content' => $validatedData['content'],
    ]);

        return redirect()->route('index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
