@extends('base')

@section('title')  
    <title>Autocar | Modifier un vehicule</title>
@endsection

@section('libelle')
    <h1>Modifier un vehicule</h1>
@endsection


@section('method')
    @method('PATCH')
@endsection

@section('oldName')
    <input type="text" name="name" value="{{ $vehicule->name }}">
@endsection

@section('oldPrice')
    <input type="text" name="price" value="{{ $vehicule->price }}">
@endsection

@section('oldMatricule')
    <input type="text" name="matricule" value="{{ $vehicule->matricule }}">
@endsection

@section('oldYear')
    <input type="text" name="year" value="{{ $vehicule->year }}">
@endsection

@section('oldCategory')
    @foreach($categories as $category)
        @if($vehicule->category->id == $category->id)
            <option value="{{$category->id }}" selected>{{ $category->name }} </option>
        @else
            <option value="{{$category->id }}">{{ $category->name }} </option>
        @endif           
    @endforeach
@endsection

@section('oldMarque')
    @foreach($marques as $marque)
        @if($vehicule->marque->id == $marque->id)
            <option value="{{$marque->id }}" selected>{{ $marque->name }} </option>
        @else
            <option value="{{$marque->id }}">{{ $marque->name }} </option>
        @endif           
    @endforeach
@endsection


@section('content')
    @include('vehicule/form')
@endsection