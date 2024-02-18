@extends('base')

@section('title')  
    Autocar | Modifier une marque
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