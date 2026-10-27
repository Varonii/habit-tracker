<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {
        $name = 'Thiago';
        $habits = ['read', 'play videogames', 'surf', 'study'];

        return view('home', [
            'name' => $name,
            'habits' => $habits
        ]);
    }
}
