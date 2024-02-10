<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autocar</title>
</head>
<body>
    <h1>Page de detail du {{ $vehicule->name }}</h1>
    <h2>Vehicule de marque {{ $vehicule->marque->name }} et de categorie {{ $vehicule->category->name }}  </h2>
    <h3>Vehicule creer en {{ $vehicule->year }}</h3>
    <h3>Prix du vehicule {{ $vehicule->price }}</h3>

    <form action="" method='post'>
        <input type="submit" value="Reserver la voiture">
    </form>
</body>
</html>