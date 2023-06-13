<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ComicRequest;
use App\Models\Comic;

class ComicsController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    public function create()
    {
        return view('comics.create');
    }

    public function store(ComicRequest $request)
    {
        $comic = Comic::create($request->validated());
        return redirect()->route('comics.show', $comic);
    }

    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    public function update(ComicRequest $request, Comic $comic)
    {
        $comic->update($request->validated());
        return redirect()->route('comics.show', $comic);
    }

    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
