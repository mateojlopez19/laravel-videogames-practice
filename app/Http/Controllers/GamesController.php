<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVideogame;
use App\Models\Videogame;
use App\Models\Category;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    //
    public function index(){
        //$videoGames = array('fifa 23', 'nba','super mario');
        $videoGames = Videogame::orderBy('id', 'desc')->get();

        return view('index', ['gameName'=>$videoGames]);
    }

    public function create(){
        $categories = Category::all();

        return view('create', ['categorias'=>$categories]);
    }

    public function help($name_game, $categoria = null){

        return view('show', ['nameVideogame'=>$name_game,
        'categoryGame'=>$categoria]);
    }

    public function storeVideogame(StoreVideogame $request){

        /*  $request->validate([
            'name_game' => 'required|min:5|max:10'
        ]); */

        /* $videogame = new Videogame();
        $videogame->name = $request->name;
        $videogame->category_id = $request->category_id;
        $videogame->active = 1;
        $videogame->save(); */

        Videogame::create($request->all());

        return redirect()->route('games');
    }

    public function view($game_id){
        $game = Videogame::find($game_id);
        $categories = Category::all();

        return view('update', ['categorias'=>$categories, 'game' => $game]);
    }

    public function updateVideogame(Request $request){

        /* $request->validate([
            'name_game' => 'required|min:5|max:10'
        ]); */

        $videogame = Videogame::find($request->game_id);
        $videogame->name = $request->name_game;
        $videogame->category_id = $request->categoria_id;
        $videogame->active = 1;
        $videogame->save();

        return redirect()->route('games');
    }

    public function delete($game_id){
        $game = Videogame::find($game_id);
        $game->delete();

        return redirect()->route('games');
    }
}
