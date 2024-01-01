<?php

namespace App\Http\Controllers;

use App\Models\Projets;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ProjetController extends Controller
{
    public function index()
    {
        $projets = Projets::all();
        return view("projets.liste", ["projets" => $projets]);
    }
    
    public function create()
    {
        return view("projets.create");
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "code"=>"required",
            "nom" => "required", 
            "description" => "required", 
            "budget" => "required", 
            "date_debut" => "required", 
            "date_fin" => "required", 
            "statut" => "required", 
        ]); 
        $projet = new Projets (
            [
                "code" => $validatedData["code"],
                "nom"=>$validatedData["nom"] ,
                "description"=>$validatedData["description"] ,
                "budget"=>$validatedData["budget"] ,
                "date_debut"=>$validatedData["date_debut"] ,
                "date_fin"=>$validatedData["date_fin"] ,
                "statut"=>$validatedData["statut"]
            ]); 
            $projet->save(); 
            return redirect()->route("liste_projets");
        }

        public function edit($id)
    {
        $projet = Projets::find($id);
        return view('projets.modifprojet', compact('projet'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "code" => "required",
            "nom" => "required",
            "description" => "required",
            "budget" => "required",
            "date_debut" => "required",
            "date_fin" => "required",
            "statut" => "required",
        ]);

        $projet = Projets::find($id);
        $projet->update($request->all());

        return redirect()->route('liste_projets')->with('success', 'Projet mis à jour avec succès');
    }

    public function delete($id)
{
    // Recherche du projet par son identifiant
    $projet = Projets::find($id);

    // Vérifie si le projet existe
    if (!$projet) {
        return redirect()->route('liste_projets')->with('error', 'Projet non trouvé.');
    }

    // Charge la vue pour la suppression
    return view('projets.liste', compact('projet'));
}

public function destroy($id)
{
    // Recherche du projet par son identifiant
    $projet = Projets::find($id);

    // Dans votre méthode destroy
if ($projet->delete()) {
    return redirect()->route('liste_projets')->with('success', 'Projet supprimé avec succès.');
} else {
    return redirect()->route('liste_projets')->with('error', 'Erreur lors de la suppression du projet.');
}


    // Vérifie si le projet existe
    if (!$projet) {
        return redirect()->route('liste_projets')->with('error', 'Projet non trouvé.');
    }

    // Suppression du projet
    $projet->delete();

    // Redirection vers la liste des projets avec un message de succès
    return redirect()->route('liste_projets')->with('success', 'Projet supprimé avec succès.');
}

        
}
