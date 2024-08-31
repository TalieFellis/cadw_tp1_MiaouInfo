<?php

namespace App\Http\Controllers;

use App\Models\Fait;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Affiche un fait aléatoire sur la page d'accueil.
     */
    public function index()
    {
        return view('index', [
            "fait" => Fait::inRandomOrder()->first()
        ]);
    }
}
