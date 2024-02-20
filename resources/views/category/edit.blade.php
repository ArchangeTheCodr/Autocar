@extends('base')

@section('title')  
    <title> Autocar | Modifier une categorie</title> 
@endsection

@section('libelle')  
   Modifier une categorie
@endsection

@section('method')  
    @method('PATCH')
@endsection

@section('oldName')  
    value="{{ old('name', $category->name) }}"
@endsection

@section('oldDescription')  
    value="{{ $category->description}}"
@endsection

@section('content')
    @include('category/form')
@endsection