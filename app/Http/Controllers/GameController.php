<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use App\Http\Requests\GameStorerequest;

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
    public function store(GameStorerequest $request)
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
    public function show(Game $data)
    {
        
        return view('detail',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $data)
    {
        return view('game.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GameStorerequest $request, Game $data)
    {
        $data->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'img'=> $request->img ? $request->img->store('public/images') : 'public/images/default.png'
        ]);
        return redirect()->route('edit.game', compact('data'))->with('success', 'Gioco modificato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $data)
    {
        $data->delete();
        return redirect()->route('index.game')->with('success', 'Gioco eliminato con successo!');
    }
}
