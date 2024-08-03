<!-- resources/views/Formlogin.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Finetracker</title>
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon" />

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/kaiadmin.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/demo.css') }}" />
</head>
<body>
<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card shadow-lg p-4" style="width: 100%; max-width: 400px;">
        <h2 class="mb-4 text-center">Se connecter</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif
        <form action="{{ url('/login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Adresse e-mail</label>
                <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" name="remember" class="form-check-input" id="remember">
                <label class="form-check-label" for="remember">Se souvenir de moi</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Se connecter</button>
        </form>
        <div class="text-center mt-3">
            <a href="{{ url('/register') }}">Créer un compte</a>
        </div>
    </div>
</div>

<!-- Core JS Files -->
<script src="{{ asset('js/core/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('js/core/popper.min.js') }}"></script>
<script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
</body>
</html>
