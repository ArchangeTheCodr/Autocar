<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservation</title>
</head>
<body>
    <h1>Valider la reservation</h1    >
    <p>
        Nombre de vehicule reserver : {{ $reservation->items }}
    </p>
    <p>
        @foreach($reservation->items as $item)
            @php
                // Calcul du prix total de la reservation
                $reservation->total_price = $reservation->total_price + $item->total_price 
            @endphp
        @endforeach
        Montant total a payer : {{ $reservation->total_price }} FCFA
        @php
            // Envoi du prix total au controller via la sesssion 
            session(['total_price' => $reservation->total_price])
        @endphp
    </p>
    {{-- Formulaire de validation de la reservation --}}
    <form action="" method="post">
        @csrf
        <input type="submit" value="Valider">
    </form>
    <a href="{{ route('vehicule.index') }}">Annuler</a>
</body>
</html>