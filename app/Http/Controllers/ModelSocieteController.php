<?php

namespace App\Http\Controllers;

use App\Models\ModelSociete;
use Illuminate\Http\Request;

class ModelSocieteController extends Controller
{
    //
    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'nom' => 'required|string',
            'activité' => 'required|string',
            'adresse' => 'required|string',
            'complement' => 'required|string',
            'code_postal' => 'required|string',
            'region' => 'required|string',
            'ville' => 'required|string',
            'pays' => 'required|string',
            'telephone' => 'required|string',
            'email' => 'required|string',
            // 'capital' => 'required|numeric',
        ]);

        // Création de la société
        $entreprise = new ModelSociete;
        $entreprise->nom = $request->nom;
        $entreprise->activité = $request->activité;
        $entreprise->adresse = $request->adresse;
        $entreprise->complement = $request->complement;
        $entreprise->code_postal = $request->code_postal;
        $entreprise->region = $request->region;
        $entreprise->ville = $request->ville;
        $entreprise->pays = $request->pays;
        $entreprise->telephone = $request->telephone;
        $entreprise->email = $request->email;
        // $entreprise->capital = $request->capital;
        // Enregistrement dans la base de données
        $entreprise->save();

        // Retourner une réponse appropriée
        return response()->json(['message' => 'Société insérée avec succès'], 201);
    }
}
