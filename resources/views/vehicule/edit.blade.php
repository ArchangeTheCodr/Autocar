<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autocar</title>
</head>
<body>
    <h1>Modifier un vehicule</h1>

    <form action="" method="post">
        @csrf
        @method('PATCH')

        <div>
            <label for="name">Nom</label>
            <input type="text" name="name" value="{{ $vehicule->name }}">

            @error('name')
                {{ $message }}
            @enderror
        </div>

        <div>
            <label for="price">Prix</label>
            <input type="number" name="price" value="{{ $vehicule->price }}">

            @error('price')
                {{ $message }}
            @enderror
        </div>

        <div>
            <label for="matricule">matricule</label>
            <input type="text" name="matricule" value="{{ $vehicule->matricule }}">

            @error('matricule')
                {{ $message }}
            @enderror
        </div>

        <div>
            <label for="year">Date de creation</label>
            <input type="text" name="year" value="{{ $vehicule->year }}">
            
            @error('year')
                {{ $message }}
            @enderror
        </div>

        <div>
            <label for="category_id">Selectionner une categorie</label>
            <select name="category_id" id="">
                
                @foreach($categories as $category)
                    @if($category->id == $vehicule->category->id)
                        <option value="{{ $category->id }}" selected>{{$category->name}}</option>
                    @else
                        <option value="{{ $category->id }}" >{{$category->name}}</option>
                    @endif
                @endforeach
            </select>

            @error('category')
                {{ $message }}
            @enderror
        </div>

        <div>
            <label for="marque_id">Selectionner une categorie</label>
            <select name="marque_id" id="">
                @foreach($marques as $marque)
                    @if($marque->id == $vehicule->marque->id)
                        <option value="{{ $marque->id }}" selected>{{$marque->name}}</option>
                    @else
                        <option value="{{ $marque->id }}" >{{$marque->name}}</option>
                    @endif
                    <!-- <option value="{{ $marque->id }}">{{$marque->name}}</option> -->
                @endforeach
            </select>

            @error('marque')
                {{ $message }}
            @enderror
        </div>

        <input type="submit" value="Enregistrer">
    </form>
</body>
</html>