<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::all();
        return view('games', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('game.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Game::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'img'=> $request->img ? $request->img->store('public/images') : 'public/images/default.png'
        ]);
         return redirect()->route('game.create')->with('success', 'Gioco aggiunto con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Game::find($id);
        return view('detail',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        //
    }
}
