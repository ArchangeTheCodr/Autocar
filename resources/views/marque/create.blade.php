@extends('base')

@section('title')  
    <title>Autocar | Creer une marque</title>  
@endsection

@section('libelle')  
   Creer une marque
@endsection

@section('content')
    @include('marque/form')
@endsection