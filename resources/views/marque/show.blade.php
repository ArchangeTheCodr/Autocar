@extends('base')

@section('title')  
<title>Marque |  {{ $marque }}</title>
   
@endsection

@section('content')
    <h1>Tous les vehicules de la marque {{ $marque }}</h1>
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
        </li>
    @endforeach
    </ul>
@endsection