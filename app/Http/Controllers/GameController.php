<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Console;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\GameStorerequest;

class GameController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except('index');

    }

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
        $categories= Category::all();
        $consoles= Console::all();
        return view('game.create', compact('categories','consoles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GameStorerequest $request)
    {
        
        $data= Game::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'img'=> $request->img ? $request->img->store('public/images') : 'public/images/default.png',
            "category_id"=> $request->category_id,
        ]);

        $data->consoles()->attach($request->console);
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
        $categories= Category::all();
        $consoles=Console::all();
        return view('game.edit', compact('data','categories','consoles'));
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
            'img'=> $request->img ? $request->img->store('public/images') : 'public/images/default.png',
            "category_id"=> $request->category_id
        ]);
        $data->consoles()->detach();
        $data->consoles()->attach($request->console);
        return redirect()->route('edit.game', compact('data'))->with('success', 'Gioco modificato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $data)
    {
        foreach($data->consoles as $console){
            $data->consoles()->detach($console);
        }
        $data->delete();
        return redirect()->route('index.game')->with('success', 'Gioco eliminato con successo!');
    }

    public function filterByCategory(Category $category){
        return view('game.filterByCategory',compact('category'));
    }


    
}
