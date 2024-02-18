<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autocar</title>
</head>
<body>
    
</body>
</html>

@extends('base')

@section('title')  
    Autocar | Marque
@endsection

@section('content') 
    <h1>Toutes nos marques</h1>
    <ul>
        @foreach($marques as $marque)
            <li>
                <div>
                    <p>
                    {{$marque->name}}
                    <a href="{{ route('marque.show', ['id' => $marque->id]) }} "> Voir les vehicules </a>
                    </p>
                </div>
                <div>
                    <p>
                        <button>
                             <a href="{{ route('marque.edit', $marque->id) }}">
                                Modifier
                            </a> 
                        </button>
                        
                        <form action="{{ route('marque.destroy', $marque->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Supprimer">
                        </form>
                    </p>
                </div>
            </li>
        @endforeach
    </ul>
@endsection