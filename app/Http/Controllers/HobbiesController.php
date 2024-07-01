<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function show(){
        $data = array (
            'artist' => ['(G)I-DLE', 'BTS', 'TWICE'],
            'fav-song' => ['Fate', 'Spring Day', 'Look at Me']
        );

        $games = array (
            "game" => ['Valorant', 'Sekiro: Shadows Die Twice', 'Wild Rift'],
        );

        return view('hobbies', ['artists' => $data, 'games' => $games]);
    }
}
