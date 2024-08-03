<?php

namespace App\Http\Controllers;

use App\Models\Revenue;
use App\Models\Categories;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IncomeController extends Controller
{
    public function list_revenues()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'Vous devez être connecté pour accéder à cette page.');
        }

        $revenues = $user->revenues; // Assurez-vous que la relation revenues est définie dans le modèle User
        return view('revenues.list', compact('revenues'));
    }

    public function create()
    {
        $categories = Categories::all();
        return view('incomes.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'amount' => 'required|numeric',
            'date' => 'required|date',
        ]);

        Revenue::create($request->all());

        return redirect()->route('incomes.index')
            ->with('success', 'Income created successfully.');
    }

    public function show(Revenue $income)
    {
        return view('incomes.show', compact('income'));
    }

    public function edit(Revenue $income)
    {
        $categories = Categories::all();
        return view('incomes.edit', compact('income', 'categories'));
    }

    public function update(Request $request, Revenue $income)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'amount' => 'required|numeric',
            'date' => 'required|date',
        ]);

        $income->update($request->all());

        return redirect()->route('incomes.index')
            ->with('success', 'Income updated successfully.');
    }

    public function destroy(Revenue $income): RedirectResponse
    {
        $income->delete();

        return redirect()->route('incomes.index')
            ->with('success', 'Income deleted successfully.');
    }
}
