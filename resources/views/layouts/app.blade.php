<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Page FineTracker')</title>
    <!-- Inclure Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
@yield('content')
<!-- Inclure Bootstrap JS et Popper.js -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
