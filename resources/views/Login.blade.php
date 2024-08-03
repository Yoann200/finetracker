<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Finetracker</title>
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon" />

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/kaiadmin.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/demo.css') }}" />

    <style>
        body {
            background: url('{{ asset('img/Login.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .main-container {
            text-align: center;
            padding: 50px;
            background: rgba(255, 255, 255, 0.9); /* Semi-transparent white background */
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        .main-container h1 {
            margin-bottom: 30px;
        }
        .main-container a {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #007bff;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .main-container a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="main-container">
    <h1>Bienvenue sur Finetracker</h1>
    <a href="{{ url('/Form login') }}">Se connecter</a>
    <a href="{{ url('/Register') }}">S'inscrire</a>
</div>

<!-- Core JS Files -->
<script src="{{ asset('js/core/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('js/core/popper.min.js') }}"></script>
<script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
</body>
</html>
