<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire - Finetracker</title>
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon" />

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/kaiadmin.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" /> <!-- Lien vers Animate.css -->

    <style>
        body {
            background-color: #343a40; /* Fond sombre */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .register-container {
            text-align: center;
            padding: 50px;
            background: white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
            max-width: 400px;
            width: 100%;
            animation: fadeIn 1.5s; /* Animation de l'ensemble du container */
        }
        .register-container h2 {
            margin-bottom: 30px;
            color: #343a40;
            animation: bounceInDown 2s; /* Animation du titre */
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-control {
            padding: 10px;
            font-size: 16px;
            border-radius: 4px;
            border: 1px solid #ced4da;
        }
        .btn-primary {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 4px;
            background-color: #007bff;
            border: none;
            color: white;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
        .register-container a {
            display: block;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .register-container a:hover {
            color: #0056b3;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
<div class="register-container">
    <h2>S'inscrire</h2>

    <form action="{{ url('/Form login'}}" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Name" required>
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="E-mail" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Veuillez entrer une adresse e-mail valide.">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required minlength="8" title="Le mot de passe doit contenir au moins 8 caractères.">
        </div>
        <div class="form-group">
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmez le mot de passe" required minlength="8" title="Le mot de passe doit contenir au moins 8 caractères.">
        </div>
        <button type="submit" class="btn btn-primary">S'inscrire</button>
    </form>

    <a href="{{ url('/Form login') }}">Déjà inscrit ? Se connecter</a>
</div>

<!-- Core JS Files -->
<script src="{{ asset('js/core/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('js/core/popper.min.js') }}"></script>
<script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
</body>
</html>
