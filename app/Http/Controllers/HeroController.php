<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use \app\Hero;

class HeroController extends Controller
{
    public function index()
    {
        //In the index method of the HeroController, use Eloquent to select all heroes in the database, ordered by their names in ascending order.
        $heros =  \App\Hero::whereNotNull('id')->orderBy('name', 'asc')->get();
        //Then give the result to the view.
        $view = view('hero.index',['heros'=>$heros]);
        return $view;
    }
    public function show($hero_slug)
    {
        $hero = \App\Hero::where('slug', $hero_slug)->first();

        $view = view('hero/show');
        $view->hero = $hero;
        return $view;
    }
}
