<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autocar</title>
</head>
<body>
    <h1>Toutes nos marques</h1>
    <ul>
        @foreach($marques as $marque)
            <li>
                <p>
                {{$marque->name}}
                <a href="{{ route('marque.show', ['id' => $marque->id]) }} "> Voir les vehicules </a>
                </p>
            </li>
        @endforeach
    </ul>
</body>
</html>