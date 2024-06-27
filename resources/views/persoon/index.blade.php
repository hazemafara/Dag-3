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

        /* Zorgt ervoor dat de tabel en zijn container gecentreerd worden */
        .table-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            position: relative;
            /* Maakt het mogelijk om de home button relatief te positioneren */
        }

        .table {
            width: auto;
            /* Aangepast van 80% naar auto om de breedte aan te passen aan de inhoud */
            margin: 0 auto;
            border-collapse: collapse;
            table-layout: auto;
            /* Aangepast naar auto voor automatische kolombreedte */
        }

        .table th,
        .table td {
            border: 1px solid #ddd;
            text-align: left;
            padding: 8px;
            white-space: nowrap;
            /* Voorkomt dat de tekst naar een nieuwe regel gaat */
            /* Verwijderd: word-wrap: break-word; */
        }

        .table th {
            background-color: #f2f2f2;
            /* Achtergrondkleur van de kop */
            color: #333;
            /* Tekstkleur van de kop */
        }

        /* Voegt een hover effect toe aan de rijen */
        .table tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        .table tr:hover {
            background-color: #eaeaea;
        }

        .alert {
            width: 50%;
            /* Past de breedte van de alert aan */
            margin: 0 auto;
            /* Centreert de alert horizontaal */
            text-align: center;
            /* Centreert de tekst binnen de alert */
            background-color: red;
            /* Verandert de achtergrondkleur naar rood */
            color: white;
            /* Verandert de tekstkleur naar wit voor betere leesbaarheid */
            padding: 20px;
            /* Voegt padding toe voor meer ruimte binnen de alert */
            border-radius: 5px;
            /* Voegt afgeronde hoeken toe aan de alert */
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

        .top-right-container {
            position: absolute;
            /* Of 'absolute' als je niet wilt dat het meescrolt */
            top: 0;
            right: 0;
            display: flex;
            align-items: center;
            gap: 10px;
            /* Voegt ruimte toe tussen de elementen */
            margin: 20px;
            /* Voegt wat ruimte toe van de randen van het scherm */
        }

        /* Stijl voor de home button */
        .home-button {
            position: absolute;
            bottom: -50px;
            /* Positie onder de tabel */
            right: 0;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <form action="{{ route('persoon.index') }}" method="GET" class="mb-4">
        <div class="top-right-container">
            <div class="filter-container">
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
            </div>
            <button type="submit" class="btn btn-primary">Filter</button>
        </div>
    </form>
    @if ($persoon->isEmpty())
        <div class="alert alert-warning" role="alert">
            Geen klanten gevonden voor de geselecteerde postcode.
        </div>
    @else
        <h1>Personen</h1>
        <div class="table-container">
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
            <!-- Home button toegevoegd rechtsonder de tabel -->
            <a href="/" class="home-button">Home</a>
        </div>
    @endif
</body>

</html>
