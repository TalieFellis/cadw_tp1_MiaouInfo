<?php

namespace App\Http\Controllers;

use App\Models\Fait;
use Illuminate\Http\Request;
use Illuminate\Support\Str; // Importer la classe Str si utilises la version avec variable de la méthode 'list' | Supprimer si non

class FaitController extends Controller
{
    /**
     * Affiche un fait aléatoire sur la page d'accueil.
     */
    public function index() {
        $faitAleatoire = Fait::inRandomOrder()->first();

        return view('index', [
            "fait" => $faitAleatoire
        ]);
    }

    /**
     * Affiche la liste de tous les faits.
     */
    public function list() {
        // Version avec une variable... mais Éric n'ai pas ;)
        // $faits = Fait::all()->map(function ($fait) {
        //     $fait->fait = Str::limit($fait->fait, 60);
        //     return $fait;
        // });

        $faits = Fait::all();
    
        return view('faits.index', [
            'faits' => $faits
        ]);
    }

    /**
     * Affiche le formulaire d'ajout d'un fait.
     */
    public function create() {
        return view('faits.create');
    }

    /**
     * Traite l'ajout d'un fait.
     *
     * @param Request $request
     */
    public function store(Request $request) {
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
     *
     * @param Request $request
     */
    // public function destroy(int $id) {
    //     $fait = Fait::findOrFail($id);
    //     $fait->delete();

    //     return redirect('/faits')->with('success', 'Le fait a été supprimé avec succès!');
    // }

    public function destroy(Request $request) {
        $fait = Fait::findOrFail($request->id);
        $fait->delete();
    
        return redirect()
                ->route('faits.list')
                ->with('success', 'Le fait a été supprimé !');
    }



    /*************************************************/
    /*********** ÇA MARCHE PAS PANTOUTE *************/
    /************************************************/

    /**
     * Affiche le formulaire de modification d'un fait.
     * 
     * @param int $id
     */
    public function edit(int $id) {
        return view('faits.edit', [
            "fait" => Fait::findOrFail($id)
        ]);
    }

    
    /**
     * Traite la modification d'un fait.
     *
     * @param Request $request
     */


}
