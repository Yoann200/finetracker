<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FineTracker - Revenus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container text-center">
    <div class="row">
        <div class="col-12">
            <h1>Revenus</h1>

            @if (session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Montant</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach($revenues as $revenue)
                    <tr>
                        <td>{{ $revenue->id }}</td>
                        <td>{{ $revenue->name }}</td>
                        <td>{{ $revenue->amount }}</td>
                        <td>{{ $revenue->date }}</td>
                        <td>
                            <!-- Ajoutez des boutons d'action si nécessaire -->
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
