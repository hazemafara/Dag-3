<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
            color: #333;
        }
        h1 {
            color: #333;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .table, .table th, .table td {
            border: 1px solid #ddd;
        }
        .table th, .table td {
            text-align: left;
            padding: 8px;
        }
        .table th {
            background-color: #4CAF50;
            color: white;
        }
        .table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .table tr:hover {
            background-color: #ddd;
        }
        /* Additional styles for form elements if needed */
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"], input[type="email"], input[type="date"], input[type="checkbox"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    
    
        <label for="voornaam">Voornaam:</label>
        <input type="text" id="voornaam" name="voornaam" value="{{ $klant->voornaam }}" required>
    
        <label for="tussenvoegsel">Tussenvoegsel:</label>
        <input type="text" id="tussenvoegsel" name="tussenvoegsel" value="{{ $klant->tussenvoegsel }}">
    
        <label for="achternaam">Achternaam:</label>
        <input type="text" id="achternaam" name="achternaam" value="{{ $klant->achternaam }}" required>
    
        <label for="geboortedatum">Geboortedatum:</label>
        <input type="date" id="geboortedatum" name="geboortedatum" value="{{ $klant->geboortedatum }}" required>
    
        <label for="is_vertegenwoordiger">Is vertegenwoordiger:</label>
        <input type="checkbox" id="is_vertegenwoordiger" name="is_vertegenwoordiger" {{ $klant->is_vertegenwoordiger ? 'checked' : '' }}>
    
        <!-- Contactgegevens -->
        <label for="contact_street">Straat:</label>
        <input type="text" id="contact_street" name="contact_street" value="{{ $klant->contact_street }}" required>
    
        <label for="house_number">Huisnummer:</label>
        <input type="text" id="house_number" name="house_number" value="{{ $klant->house_number }}">
    
        <label for="additional_info">Aanvullende info:</label>
        <input type="text" id="additional_info" name="additional_info" value="{{ $klant->additional_info }}">
    
        <label for="postal_code">Postcode:</label>
        <input type="text" id="postal_code" name="postal_code" value="{{ $klant->postal_code }}" required>
    
        <label for="city">Stad:</label>
        <input type="text" id="city" name="city" value="{{ $klant->city }}" required>
    
        <label for="contact_email">E-mail:</label>
        <input type="email" id="contact_email" name="contact_email" value="{{ $klant->contact_email }}" required>
    
        <label for="contact_mobile">Mobiel:</label>
        <input type="text" id="contact_mobile" name="contact_mobile" value="{{ $klant->contact_mobile }}" required>
    
        <a href="{{ route('persoon.klant') }}"><button type="submit">Opslaan</button></a> 

</body>
</html>