<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autocar</title>
</head>
<body>
    <h1>Les categories</h1>
    <ul>
        @foreach($categories as $category)
            <li>{{$category->name}}</li>
        @endforeach
    </ul>
</body>
</html>