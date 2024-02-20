@yield('libelle')

<form action="" method="post">
    @csrf
    @yield('method')
    
    <div>
        <label for="name">Nom</label>
        @yield('oldName')

        @error('name')
            {{ $message }}
        @enderror
    </div>

    <div>
        <label for="price">Prix</label>
        @yield('oldPrice')

        @error('price')
            {{ $message }}
        @enderror
    </div>

    <div>
        <label for="matricule">matricule</label>
        @yield("oldMatricule")

        @error('matricule')
            {{ $message }}
        @enderror
    </div>

    <div>
        <label for="year">Date de creation</label>
        @yield('oldYear')
        
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