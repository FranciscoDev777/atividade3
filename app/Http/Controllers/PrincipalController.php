<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function bakery()
    {
        return view('bakery'); // chama bakery.blade.php
    }

    public function sobrenos()
    {
        return view('sobrenos'); // chama sobrenos.blade.php
    }
}
