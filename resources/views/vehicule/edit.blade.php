@extends('base')

@section('title')  
    Autocar | Modifier un vehicule
@endsection

@section('libelle')
    <h1>Modifier un vehicule</h1>
@endsection

@section('method')
    @method('PATCH')
@endsection

@section('oldName')
    value=" {{ $vehicule->name }} "
@endsection

@section('oldPrice')
    value="{{ $vehicule->price }}"
@endsection

@section('oldMatricule')
    value=" {{ $vehicule->matricule }} "
@endsection

@section('oldYear')
    value=" {{ $vehicule->year }} "
@endsection

@section('oldCategory')
    <option value="{{ $vehicule->id }}">{{ $vehicule->category->name }} </option>
@endsection

@section('oldMarque')
    <option value="{{ $vehicule->id }}">{{ $vehicule->marque->name }} </option>
@endsection

@section('content')
    @include('vehicule/form')
@endsection