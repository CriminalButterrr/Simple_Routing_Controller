<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function show() {
        $data = array (
            "skill" => ["Web Design","Graphic Design", "Flexibility", "Problem-Solving Skill", "Interpersonal Skills"]
        );

        return view('skills' , ['skills' => $data]);
    }
}
