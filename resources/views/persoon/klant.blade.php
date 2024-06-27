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
    
        .table-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column; /* Zorgt voor verticale centrering */
            width: 100%;
            position: relative;
            overflow-x: auto; /* Maakt horizontaal scrollen mogelijk indien nodig */
        }
    
        .table {
            max-width: 60%; /* Beperkt de breedte van de tabel tot 60% van de container */
            margin: 0 auto; /* Centreert de tabel horizontaal */
            border-collapse: collapse;
            table-layout: auto;
        }
    
        .table th,
        .table td {
            border: 1px solid #ddd;
            text-align: left;
            padding: 8px;
            white-space: nowrap;
        }
    
        .table th {
            background-color: #f2f2f2;
            color: #333;
        }
    
        .table tr:nth-child(odd) {
            background-color: #f9f9f9;
        }
    
        .table tr:hover {
            background-color: #eaeaea;
        }
    </style>
</head>

<body>
    <h1>Klanten</h1>
    <h2><a href="{{ route('persoon.index') }}">Klanten overzicht</a></h2>
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>Voornaam</th>
                    <th>Tussenvoegsel</th>
                    <th>Achternaam</th>
                    <th>Geboortedatum</th>
                    <th>Is Vertegenwoordiger</th>
                    <th>Straat</th>
                    <th>Huisnummer</th>
                    <th>Extra Info</th>
                    <th>Postcode</th>
                    <th>Stad</th>
                    <th>Email</th>
                    <th>Telefoon</th>
                    <th>wijzigen</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($klant as $item)
                    <tr>
                        <td>{{ $item->voornaam }}</td>
                        <td>{{ $item->tussenvoegsel }}</td>
                        <td>{{ $item->achternaam }}</td>
                        <td>{{ $item->geboortedatum }}</td>
                        <td>{{ $item->is_vertegenwoordiger ? 'Ja' : 'Nee' }}</td>
                        <td>{{ $item->contact_street }}</td>
                        <td>{{ $item->house_number }}</td>
                        <td>{{ $item->additional_info }}</td>
                        <td>{{ $item->postal_code }}</td>
                        <td>{{ $item->city }}</td>
                        <td>{{ $item->contact_email }}</td>
                        <td>{{ $item->contact_mobile }}</td>
                        <td><a href="{{ route('persoon.edit', ['id' => $item->id]) }}"
                                class="btn btn-primary">Bewerken</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
