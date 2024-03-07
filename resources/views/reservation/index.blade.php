@extends('base')

@section('title')
    <title>Reservation</title>
@endsection

@section('content')
    @if (session('delete'))
        <div style="background-color: greenyellow; height: 10vh">
            {{ session('delete') }}
        </div>
    @endif
    <h1>Ma reservation</h1>

    <div>
        @forelse ($reservation->items as $item)
            <div style="border: 3px solid #b22fc1; margin:5px;">
                <p>
                    <strong> [{{ $item->vehicule->marque->name }}] {{ $item->vehicule->name }} </strong>
                </p>
                <p> Quantite : {{ $item->quantity }} </p>
                <p> Date debut : {{ $item->start_date}} </p>   
                <p> date fin : {{ $item->end_date }} </p>
                <p> Prix : {{ $item->total_price }} </p>  
                    
                <p>
                    <a href="{{ route('reservationItem.edit', ['vehiculeId' => $item->vehicule->id, 'reservationItemId' => $item->id]) }}">Modifier</a>
                    <form action="{{ route('reservationItem.destroy', ['vehiculeId' => $item->vehicule->id, 'reservationItemId' => $item->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Supprimer">
                    </form>
                </p>
            </div>
        @empty
            <h3>Aucun item n'a encore ete reserver</h3>
        @endforelse
    </div>
    <button><a href="{{ route('reservation.create', ['reservation' => $reservation]) }}">Valider la reservation</a></button>
    <button><a href="{{ route('vehicule.index') }}">Parcourir les vehicules</a></button>

@endsection