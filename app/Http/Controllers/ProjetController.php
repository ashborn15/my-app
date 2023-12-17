<?php

namespace App\Http\Controllers;

use App\Models\Projets;
use Illuminate\Http\Request;
use App\Http\Controllers\ProjetController;

class ProjetController extends Controller
{
    public function index()
    {
        $liste_projets = Projets::all();
        return view("projets.liste",["nos_projets" => $liste_projets]);
    }
    public function create()
    {
        $create_projets = Projets::all();
        return view("projets.create",["nos_projets" => $create_projets]);
    }
}