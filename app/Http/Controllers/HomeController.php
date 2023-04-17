<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __invoke()
    {
        $slide = Slide::all();

        return view('users.home', compact('slide'));
    }
}
