<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use Illuminate\Http\Request;
use App\Http\Controllers\ZoneController;

class ZoneController extends Controller
{
    public function index()
    {
        $liste_zones = Zone::all();
        return view("projets.listeZone",["nos_zones" => $liste_zones]);
    }
    public function create()
    {
        return view("zone.create");
    }
}

