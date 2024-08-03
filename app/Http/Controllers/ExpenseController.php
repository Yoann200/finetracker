<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expenses;
use Illuminate\Support\Facades\Auth;

class ExpenseController extends Controller
{
    public function list_expenses()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'Vous devez être connecté pour accéder à cette page.');
        }

        $expenses = $user->expenses; // Assurez-vous que la relation expenses est définie dans le modèle User
        return view('expenses.list', compact('expenses'));
    }

    public function create()
    {
        return view('expenses.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'amount' => 'required|numeric',
            'date' => 'required|date',
        ]);

        $user = Auth::user();
        $user->expenses()->create($validatedData);

        return redirect()->route('Expenses.list')->with('success', 'Dépense créée avec succès.');
    }

    public function edit($id)
    {
        $expense = ExpenseController::findOrFail($id);
        return view('expenses.edit', compact('expense'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'amount' => 'required|numeric',
            'date' => 'required|date',
        ]);

        $expense = ExpenseController::findOrFail($id);
        $expense->update($validatedData);

        return redirect()->route('Expenses.list')->with('success', 'Dépense mise à jour avec succès.');
    }

    public function destroy($id)
    {
        $expense = ExpenseController::findOrFail($id);
        $expense->delete();

        return redirect()->route('Expenses.list')->with('success', 'Dépense supprimée avec succès.');
    }
}

