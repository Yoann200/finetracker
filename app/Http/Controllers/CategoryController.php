<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    private static function findOrFail($id)
    {
    }

    public function index()
    {
        $user = Auth::user();
        $categories = $user->categories;
        return view('categories.list', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Créer une nouvelle catégorie
        $user = Auth::user();
        $user->categories()->create($validatedData);

        // Rediriger vers la liste des catégories avec un message de succès
        return redirect()->route('Categories.List')->with('success', 'Catégorie créée avec succès.');
    }

    public function edit($id)
    {
        $category = CategoryController::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Mettre à jour la catégorie existante
        $category = CategoryController::findOrFail($id);
        $category->update($validatedData);

        // Rediriger vers la liste des catégories avec un message de succès
        return redirect()->route('Categories.List')->with('success', 'Catégorie mise à jour avec succès.');
    }

    public function destroy($id)
    {
        // Trouver et supprimer la catégorie
        $category = CategoryController::Controller::findOrFail($id);
        $category->delete();

        // Rediriger vers la liste des catégories avec un message de succès
        return redirect()->route('Categories.List')->with('success', 'Catégorie supprimée avec succès.');
    }
}

