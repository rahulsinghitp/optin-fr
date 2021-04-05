<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signing up information</title>
</head>
<body>
    <p>Salutation: <b>{{ $details['salutation'] }}</b></p>
    <p>First Name: <b>{{ $details['first_name'] }}</b></p>
    <p>Last Name: <b>{{ $details['last_name'] }}</b></p>
    <p>Office address 1: <b>{{ $details['office_address_1'] }}</b></p>
    <p>Office address 2: <b>{{ $details['office_address_2'] }}</b></p>
    <p>City: <b>{{ $details['city'] }}</b></p>
    <p>Province or territory: <b>{{ $details['province'] }}</b></p>
    <p>Postal code: <b>{{ $details['postal_code'] }}</b></p>
    <p>Specialty: <b>{{ $details['speciality'] }}</b></p>
    <p>Email Address: <b>{{ $details['email'] }}</b></p>
</body>
</html>