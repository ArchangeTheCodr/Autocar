@extends('base')

@section('title')
    <title> Vehicule | {{ $vehicule->marque->name }} {{ $vehicule->name }} </title>
@endsection

@section('content')
    <h1>Page de detail du {{ $vehicule->name }}</h1>
    <h2>Vehicule de marque {{ $vehicule->marque->name }} et de categorie {{ $vehicule->category->name }}  </h2>
    <h3>Vehicule creer en {{ $vehicule->year }}</h3>
    <h4>Prix du vehicule {{ $vehicule->price }}</h4>
    <h4>Les images</4>
    <article>
            @foreach($vehicule->getImageUrl() as $image)
                <p>
                    <img src="/storage/{{ $image->image }}" alt="{{ $vehicule->name }}">
                </p>
            @endforeach
    </article>
    <h4>La video</h4>
    <article>
        <video src="{{ $vehicule->getVideoUrl() }}" controls width="640" height="360">
            Presentation du {{ $vehicule->name }}
        </video>
    </article>
    <button>
        <a href="{{ route('reservationItem.create', ['id' => $vehicule->id]) }}">
            Reserver la voiture
        </a>
    </button>
@endsection

