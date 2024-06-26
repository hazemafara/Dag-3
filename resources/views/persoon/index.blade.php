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
    </style>
</head>
<body>
    <h1>Personen</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Gezin Naam</th>
                    <th>Is Vertegenwoordiger</th>
                    <th>Contact Email</th>
                    <th>Contact Mobile</th>
                    <th>Straat</th>
                    <th>Huisnummer</th>
                    <th>Toevoeging</th>
                    <th>Postcode</th>
                    <th>Stad</th>
                    <th>Klant Details</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($persoon as $item)
                    <tr>
                        <td>{{ $item->gezin_naam }}</td>
                        <td>{{ $item->is_vertegenwoordiger ? 'Ja' : 'Nee' }}</td>
                        <td>{{ $item->contact_email }}</td>
                        <td>{{ $item->contact_mobile }}</td>
                        <td>{{ $item->contact_street }}</td>
                        <td>{{ $item->house_number }}</td>
                        <td>{{ $item->additional_info }}</td>
                        <td>{{ $item->postal_code }}</td>
                        <td>{{ $item->city }}</td>
                        <td><a href="{{ route('persoon.klant') }}">Details</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</body>
</html>