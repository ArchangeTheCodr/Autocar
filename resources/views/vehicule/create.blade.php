@extends('base')

@section('title') 
    <title>Autocar | Creer un vehicule</title> 
@endsection

@section('libelle')
    <h1>Creer un vehicule</h1>  
@endsection

@section('oldName')
    <input type="text" name="name" >
@endsection

@section('oldPrice')
    <input type="text" name="price">
@endsection

@section('oldMatricule')
    <input type="text" name="matricule">
@endsection

@section('oldYear')
    <input type="text" name="year">
@endsection

@section('oldMarque')
    @foreach($marques as $marque)
        <option value="{{$marque->id }}">{{ $marque->name }}</option>
    @endforeach
@endsection

@section('oldCategory')
<br>
    @foreach($categories as $category)
        <option value="{{$category->id }}">{{ $category->name }}</option>
    @endforeach
@endsection

 @section('content')
    @include('vehicule/form')
@endsection
