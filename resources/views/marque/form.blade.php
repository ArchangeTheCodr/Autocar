<h1> @yield('libelle') </h1>
<form action="" method="post">

    @csrf
    @yield('method')

    <div>
        <label for="name">Nom</label>
        <input type="text" name="name" id="" @yield('oldName')>
        
        @error('name')
            {{ $message }}
        @enderror
    </div>

    <div>
        <input type="submit" value="Enregistrer">
    </div>
</form>