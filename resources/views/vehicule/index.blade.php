@extends('base')

@section('title')
    Autocar | Vehicule
@endsection

@section('content')
    <h1>Tous nos vehicules</h1>

    <ul>
    @foreach($vehicules as $vehicule)
        <li>
            <p>
                <strong>Model :</strong> {{ $vehicule->name }} <br>
                <strong>Prix : </strong>{{ $vehicule->price }} <br>
                <strong>Annee : </strong>{{ $vehicule->year }} <br>
            </p>
            <p>
                <button type="submit"> <a href="{{ route('vehicule.show', ['id' => $vehicule->id]) }}"> Details </a> </button>
            </p>

            <div>
                    <p>
                        <button>
                            <a href="{{ route('vehicule.edit', $vehicule->id) }}">
                                Modifier
                            </a> 
                        </button>
                        
                        <form action="{{ route('vehicule.destroy', $vehicule->id) }}" method="post">
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

