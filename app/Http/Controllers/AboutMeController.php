<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function show() {
        $data = array (
            "name" => "Harold Agwiking",
            "likes" => ["Discovering new foods", "Wathching movies/series"],
            "artists" => ['BTS', 'Twice', '(G)I-DLE'],
            "series" => ['The Umbrella Academy', 'The Umbrella Academy', 'The French Dispatch']
        );

        return view('aboutme' , ['personal_information' => $data]);
    }
}
