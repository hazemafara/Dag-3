<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leverancier Overzicht</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Light gray background */
        }
        .filter-form {
            margin-bottom: 20px;
        }
        .container {
            margin-top: 50px; /* Add margin to top of container */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mb-4">Leverancier Overzicht</h1>

        <!-- Filter Form -->
        <form class="form-inline filter-form mb-4" action="{{ route('leveranciers.filter') }}" method="GET">
            <div class="form-group mr-2">
                <label for="type" class="mr-2">Selecteer Leverancier Type:</label>
                <select class="form-control" name="type" id="type">
                    <option value="all">Alle Types</option>
                    <option value="Bedrijf">Bedrijf</option>
                    <option value="Instelling">Instelling</option>
                    <option value="Overheid">Overheid</option>
                    <option value="Particulier">Particulier</option>
                    <option value="Donor">Donor</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Filter</button>
        </form>

        <!-- Display Suppliers Table or Message -->
        @if($leveranciers->isEmpty())
            <div class="alert alert-info">
                Er zijn geen leveranciers bekend van het geselecteerde leverancierstype.
            </div>
        @else
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Naam</th>
                            <th>Contactpersoon</th>
                            <th>Leverancier Nummer</th>
                            <th>Leverancier Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($leveranciers as $leverancier)
                            <tr>
                                <td>{{ $leverancier->Naam }}</td>
                                <td>{{ $leverancier->ContactPerson }}</td>
                                <td>{{ $leverancier->LeverancierNummer }}</td>
                                <td>{{ $leverancier->LeverancierType }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif

    </div>

    <!-- Bootstrap JS and dependencies (optional) -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
