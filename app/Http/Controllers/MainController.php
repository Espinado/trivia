<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Classes\trivia;

class MainController extends Controller
{
    public function index(request $request)
    {
        Session::put('player_name', $request->player_name);
        $numbers=rand(1,100);
        $times=10;
        for ($i = 1; $i <= $times; $i++) {
            $numbers=rand(1,100);
            echo "The number is: $numbers <br>";
          }
        // return view('game_field');
    }
}
