<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('Formlogin');
    }

    public function login(Request $request)
    {
        // Récupérer les informations d'identification de la requête
        $credentials = $request->only('email', 'password');

        // Valider les informations d'identification
        $validator = Validator::make($credentials, [
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        // Si la validation échoue, rediriger avec les erreurs
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Tentative de connexion
        if (Auth::attempt($credentials, $request->filled('remember'))) {
            // Si la connexion réussit, régénérer la session
            $request->session()->regenerate();
            return redirect()->intended('/template'); // Redirige vers le tableau de bord
        }

        // Si la connexion échoue, rediriger avec un message d'erreur
        return back()->withErrors([
            'email' => 'Les informations d’identification fournies ne correspondent pas à nos enregistrements.',
        ])->withInput();
    }

    public function logout(Request $request)
    {
        // Déconnexion de l'utilisateur
        Auth::logout();

        // Invalider et régénérer le token de session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Rediriger vers la page de connexion
        return redirect('/login');
    }
}
