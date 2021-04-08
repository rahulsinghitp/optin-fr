<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signing up information</title>
</head>
<body>
    <p>Titre: <b>{{ $details['salutation'] }}</b></p>
    <p>Prénom: <b>{{ $details['first_name'] }}</b></p>
    <p>Nom de famille: <b>{{ $details['last_name'] }}</b></p>
    <p>Adresse professionnelle 1: <b>{{ $details['office_address_1'] }}</b></p>
    <p>Adresse professionnelle 2: <b>{{ $details['office_address_2'] }}</b></p>
    <p>Ville: <b>{{ $details['city'] }}</b></p>
    <p>Province ou territoire: <b>{{ $details['province'] }}</b></p>
    <p>Code postal: <b>{{ $details['postal_code'] }}</b></p>
    <p>Spécialité: <b>{{ $details['speciality'] }}</b></p>
    <p>Adresse courriel: <b>{{ $details['email'] }}</b></p>
</body>
</html>