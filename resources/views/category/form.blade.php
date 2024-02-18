    <h1> @yield('libelle') </h1>

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
            <label for="description">description</label>
            <input type="text" name="description" @yield('oldDescription')>

            @error('description')
                {{ $message }}
            @enderror
        </div>

        <input type="submit" value="Enregistrer">

    </form>