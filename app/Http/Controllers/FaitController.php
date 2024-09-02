<?php

namespace App\Http\Controllers;

use App\Models\Fait;
use Illuminate\Http\Request;
use Illuminate\Support\Str; // Importer la classe Str si utilises la version avec variable de la méthode 'list' | Supprimer si non

class FaitController extends Controller
{
    /**
     * Affiche la liste de tous les faits.
     */
    public function index()
    {
        return view('faits.index', [
            'faits' => Fait::all()
        ]);
    }

    /**
     * Affiche le formulaire d'ajout d'un fait.
     */
    public function create()
    {
        return view('faits.create');
    }

    /**
     * Traite l'ajout d'un fait.
     * @param Request $request
     */
    public function store(Request $request)
    {
        // Validation
        $valides = $request->validate([
            'fait' => 'required'
        ], [
            'fait.required' => 'Le fait est requis'
        ]);

        // Créer le nouveau fait
        Fait::create($valides);

        // Rediriger vers la liste des faits avec un message de succès
        return redirect('/faits')->with('success', 'Le fait a été ajouté avec succès!');
    }

    /**
     * Traite la suppression d'un fait.
     * @param Request $request
     */
    public function destroy(Request $request)
    {
        $fait = Fait::findOrFail($request->id);
        Fait::destroy($fait->id);

        return redirect()->route('faits.index')->with('success', 'Le fait a été supprimé !');
    }

    public function edit(int $id) {
        return view('faits.edit', [
            "fait" => Fait::findOrFail($id),
        ]);
    }
}
