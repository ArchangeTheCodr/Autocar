@extends('base')

@section('title')
    <title> Vehicule | {{ $vehicule->marque->name }} {{ $vehicule->name }} </title>
@endsection

@section('content')
    <h1>Page de detail du {{ $vehicule->name }}</h1>
    <h2>Vehicule de marque {{ $vehicule->marque->name }} et de categorie {{ $vehicule->category->name }}  </h2>
    <h3>Vehicule creer en {{ $vehicule->year }}</h3>
    <h4>Prix du vehicule {{ $vehicule->price }}</h4>

    <form action="" method='post'>
        <input type="submit" value="Reserver la voiture">
    </form>
@endsection

