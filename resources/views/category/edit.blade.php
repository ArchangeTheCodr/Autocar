<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autocar</title>
</head>
<body>
    <h1>Modifier une categorie</h1>

    <form action="" method="post">

        @csrf
        @method('PATCH')

        <div>
            <label for="name">Nom</label>
            <input type="text" name="name" value="{{ old('name', $category->name) }}">

            @error('name')
                {{ $message }}
            @enderror
        </div>

        <div>
            <label for="description">description</label>
            <input type="text" name="description" value="{{ $category->description}}">

            @error('description')
                {{ $message }}
            @enderror
        </div>

        <input type="submit" value="Enregistrer">

    </form>

</body>
</html>