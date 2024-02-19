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
            @yield('oldCategory')
        </select>

        @error('category')
            {{ $message }}
        @enderror
    </div>

    <div>
        <label for="marque_id">Selectionner une categorie</label>
        <select name="marque_id" id="">
            @yield('oldMarque')
        </select>

        @error('marque')
            {{ $message }}
        @enderror
    </div>
    <input type="submit" value="Enregistrer">

</form>