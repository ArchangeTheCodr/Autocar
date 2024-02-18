@yield('libelle')

<form action="" method="post">
    @csrf
    @yield('method')
    
    <div>
        <label for="name">Nom</label>
        <input type="text" name="name" @yield('oldName')>

        @error('name')
            {{ $message }}
        @enderror
    </div>

    <div>
        <label for="price">Prix</label>
        <input type="number" name="price" @yield('oldPrice')>

        @error('price')
            {{ $message }}
        @enderror
    </div>

    <div>
        <label for="matricule">matricule</label>
        <input type="text" name="matricule" @yield("oldMatricule")>

        @error('matricule')
            {{ $message }}
        @enderror
    </div>

    <div>
        <label for="year">Date de creation</label>
        <input type="text" name="year" @yield('oldYear')>
        
        @error('year')
            {{ $message }}
        @enderror
    </div>

    <div>
        <label for="category_id">Selectionner une categorie</label>
        <select name="category_id">
            @foreach($categories as $category)
                @yield('oldCategory')
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
                @yield('oldMarque')
            @endforeach
        </select>

        @error('marque')
            {{ $message }}
        @enderror
    </div>
    <input type="submit" value="Enregistrer">

</form>