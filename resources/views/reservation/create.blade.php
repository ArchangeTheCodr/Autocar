@extends('base')

@section('title')
    Reservation
@endsection

@section('content')
    
    <h1>Ma reservation</h1>

    <div>
        @foreach ($reservations->items as $item)
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
        @endforeach
    </div>

    <button><a href="{{ route('vehicule.index') }}">Retourner aux vehicules</a></button>

@endsection