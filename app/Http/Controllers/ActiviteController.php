<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use Illuminate\Http\Request;
use App\Http\Controllers\ActiviteController;

class ActiviteController extends Controller
{
    public function index()
    {
        $liste_activites = Activite::all();
        return view("projets.listeActivite",["nos_activités" => $liste_activites]);
    }
    public function create()
    {
        return view("activites.create");
    }
}
