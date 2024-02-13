<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autocar</title>
</head>
<body>
    <h1> Tous les vehicules de la categorie {{ $name }}</h1>
    <ul>
        @foreach($vehicules as $vehicule)
            <li>
                <p>
                <strong>Model :</strong> {{ $vehicule->name }} <br>
                <strong>Prix : </strong>{{ $vehicule->price }} <br>
                <strong>Annee : </strong>{{ $vehicule->year }} <br>
                </p>
                <p>
                <button type="submit"> <a href="{{ route('vehicule.show', ['id' => $vehicule->id]) }}"> Details </a> </button>
            </p>
            </li>
        @endforeach
    </ul>
</body>
</html>