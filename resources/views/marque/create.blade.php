<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autocar</title>
</head>
<body>
    <h1>Creer une nouvelle marque</h1>
    <form action="" method="post">

        @csrf

        <div>
            <label for="name">Nom</label>
            <input type="text" name="name" id="">
            
            @error('name')
                {{ $message }}
            @enderror
        </div>

        <div>
            <input type="submit" value="Enregistrer">
        </div>
    </form>
</body>
</html>