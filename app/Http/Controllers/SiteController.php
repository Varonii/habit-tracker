<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function home()
    {
        $name = 'Seu Nome';
        $habits = ['Estudar', 'Treinar', 'Ler'];

        return view('home', [
            'name' => $name,
            'habits' => $habits,
        ]);
    }
}
