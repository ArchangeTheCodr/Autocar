<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autocar</title>
</head>
<body>
<h1>Creer un nouveau vehicule</h1>

<form action="" method="post">

    @csrf

    <div>
        <label for="name">Nom</label>
        <input type="text" name="name">

        @error('name')
            {{ $message }}
        @enderror
    </div>

    <div>
        <label for="price">Prix</label>
        <input type="number" name="price" id="">

        @error('price')
            {{ $message }}
        @enderror
    </div>

    <div>
        <label for="matricule">matricule</label>
        <input type="text" name="matricule">

        @error('matricule')
            {{ $message }}
        @enderror
    </div>

    <div>
        <label for="year">Date de creation</label>
        <input type="text" name="year">
        
        @error('year')
            {{ $message }}
        @enderror
    </div>

    <input type="submit" value="Enregistrer">

</form>
</body>
</html>