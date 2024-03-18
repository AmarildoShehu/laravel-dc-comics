<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::All();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'thumb' => 'required|url:http,https',
            'price' => 'required|string',
            'series' => 'required|string',
            'sale_date' => 'required|string',
            'type' => 'required|string',
            'artists' => 'required|string',
            'writers' => 'required|string'
        ]);
        $data = $request->all();
        $new_comic = new Comic();
        $new_comic->fill($data);
        $new_comic->save();

        return to_route('comics.show', $new_comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.update', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {

        $data = $request->validate([
            'title' => ['required', 'string'],
            'description' => 'nullable|string',
            'thumb' => ['required', 'url:http,https'],
            'price' => ['required', 'string'],
            'series' => ['required', 'string'],
            'sale_date' => ['required', 'string'],
            'type' => ['required', 'string'],
            'artists' => ['required', 'string'],
            'writers' => ['required', 'string']
        ]);
        $data = $request->all();
        $comic->fill($data);
        $comic->save();

        return to_route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index');
    }
}