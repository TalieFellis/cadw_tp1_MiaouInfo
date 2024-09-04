<?php

namespace App\Http\Controllers;

use App\Models\Fait;
use Illuminate\Http\Request;

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
            'fait.required' => 'Ton message est aussi vide qu\'un bol sans croquettes.... Le fait est requis 😿'
        ]);

        // Créer le nouveau fait
        Fait::create($valides);

        return redirect('/faits')->with('succes', 'Félicitations! Un nouveau fait sur les chats a été ajouté 🐾');
    }

    /**
     * Traite la suppression d'un fait.
     * @param Request $request
     */
    public function destroy(Request $request)
    {
        $fait = Fait::findOrFail($request->id);
        Fait::destroy($fait->id);

        return redirect()->route('faits.index')->with('succes', 'Fait supprimé avec succès! Ce secret de chat a été effacé 🐱✨');
    }

    /**
     * Affiche le formulaire de modification d'un fait.
     * @param integer $id
     */
    public function edit(int $id)
    {
        return view('faits.edit', [
            "fait" => Fait::findOrFail($id),
        ]);
    }

    /**
     * Traite le formulaire de modification d'un fait.
     * @param Request $request
     */
    public function update(Request $request)
    {
        // Validation
        $valides = $request->validate([
            "id" => ["required"],
            "fait" => ["required"],
        ], [
            "id.required" => "Oh non, le fait n'existe pas 😿",
            "fait.required" => "Attention! Tu ne peux pas sauvegarder un texte vide. C'est comme essayer de nourrir un chat avec de l'air 😺",
        ]);

        $fait = Fait::findOrFail($valides["id"]);
        $fait->fait = $valides["fait"];

        $fait->save();

        return redirect()
            ->route('faits.index')
            ->with('succes', 'Bravo! Le fait a été modifié avec succès 🐾');
    }
}
