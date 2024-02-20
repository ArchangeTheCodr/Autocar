@extends('base')

@section('title') 
   <title>Autocar | Modifier une marque</title>  
@endsection

@section('libelle')  
   Modifier une marque
@endsection

@section('method')  
   @method('PATCH')
@endsection

@section('oldName')  
   value="{{ $marque->name }}"
@endsection

@section('content')
    @include('marque/form')
@endsection