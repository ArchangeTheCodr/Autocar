<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Autocar | Reservation</title>
</head>
<body>
    <h1>Reservation du vehicule : {{ $vehicule->name }}</h1>
    
    <form action="" method="post">
        @csrf
        @method('PATCH')
        <div>
            <label for="start_date">Date de debut</label>
            <input type="date" name="start_date" id="" value="{{ $item->start_date }}">
        </div>
        <div>
            <label for="end_date">Date de fin</label>
            <input type="date" name="end_date" id="" value="{{ $item->end_date }}">
        </div>
        <div>
            <label for="quantity">Nombre de vehicule a reserver</label>
            <input type="number" name="quantity" id="" value="{{ $item->quantity }}">
        </div>
        <div>
            <input type="number" name="vehicule_id" id="" value="{{ $vehicule->id }}" hidden>
        </div>
        <input type="submit" value="Mettre a jour">
        <button><a href="{{ route('vehicule.index') }}">Annuler</a></button>
    </form>
</body>
</html>