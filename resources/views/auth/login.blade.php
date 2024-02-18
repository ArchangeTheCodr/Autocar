<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autocar | Connexion</title>
</head>
<body>
    <h1> Se connecter </h1>

    <form action="" method="POST">
        @csrf

        <div>
            <label for="name">Nom d'utilisateur</label>
            <input type="text" name="name">
            <p>
                @error('name')
                    {{$message}}
                @enderror
            </p>
        </div>

        <div>
            <label for="email">E-mail</label>
            <input type="email" name="email">
            <p>
                @error('email')
                    {{$message}}
                @enderror
            </p>
        </div>

        <div>
            <label for="password">Mot de passe</label>
            <input type="text" name="password">
            <p>
                @error('password')
                    {{$message}}
                @enderror
            </p>
        </div>

        <input type="submit" value="se connecter">
    </form>

    <p>Pas encore de compte ? <a href="">Inscrivez vous</a></p>
</body>
</html>