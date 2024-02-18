<!DOCTYPE fr>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autocar</title>
</head>
<body>
    
    <div style="border : 2px solid #fff; ">
            @if (Route::has('auth.login'))
                <div>
                    @auth
                        <h3>Bonjour t'es connecter reuf !!! </h3>
                        <form action="{{ route('auth.logout') }}" method="post">
                            @csrf 
                            @method('delete')
                            <button type="submit">Deconnexion</button>
                        </form>
                    @else
                        <a href="{{ route('auth.login') }}" >Se connecter</a>

                        @if (Route::has('auth.register'))
                            <a href="{{ route('auth.register') }}" >S'inscrire</a>
                        @endif
                    @endauth
                </div>
            @endif
    </div>

</body>
</html>