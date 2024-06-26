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

        .table,
        .table th,
        .table td {
            border: 1px solid #ddd;
        }

        .table th,
        .table td {
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

        .form-group {
            margin-bottom: 1rem;
        }

        #postal_code {
            display: block;
            width: 100%;
            padding: 0.375rem 1.75rem 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        #postal_code:focus {
            border-color: #80bdff;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .btn-primary {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
            /* Custom button styles */
            padding: 0.5rem 1rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: 0.3rem;
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #0069d9;
            border-color: #0062cc;
        }
    </style>
</head>
<form action="{{ route('persoon.index') }}" method="GET" class="mb-4">
    <div class="form-group">
        <label for="postal_code">Filter op Postcode:</label>
        <select name="postal_code" id="postal_code" class="form-control">
            <option value="">Alle klanten</option>
            @foreach ($postalCodes as $postalCode)
                <option value="{{ $postalCode->postal_code }}"
                    {{ $selectedPostalCode == $postalCode->postal_code ? 'selected' : '' }}>
                    {{ $postalCode->postal_code }}
                </option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Filter</button>
</form>
@if($persoon->isEmpty())
        <div class="alert alert-warning" role="alert">
            Geen klanten gevonden voor de geselecteerde postcode.
        </div>
    @else
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
    @endif
<body>
</body>

</html>
