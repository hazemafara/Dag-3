<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Overzicht</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Light gray background */
        }
        .container {
            margin-top: 50px; /* Add margin to top of container */
        }
        .filter-form {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <h1 class="mb-4">Product Overzicht</h1>

        <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Naam</th>
                            <th>Leveranciernummer</th>
                            <th>Leveranciertype</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $leverancier->Naam }}</td>
                            <td>{{ $leverancier->LeverancierNummer }}</td>
                            <td>{{ $leverancier->LeverancierType }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <!-- Display Products Table or Message -->
        @if($products->isEmpty())
            <div class="alert alert-info">
                Er zijn geen producten gevonden voor deze leverancier.
            </div>
        @else
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Naam</th>
                            <th>SoortAllergie</th>
                            <th>Barcode</th>
                            <th>Houdbaarheidsdatum</th>
                            <th>Wijzig Product</th>
                            <!-- Add other columns as needed -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->Naam }}</td>
                                <!-- if soortallergie is null  -->
                                 @if ($product->SoortAllergie == null)
                                    <td>Geen Allergie</td>
                                @else
                                    <td>{{ $product->SoortAllergie }}</td>
                                @endif
                                <td>{{ $product->Barcode }}</td>
                                <td>{{ $product->Houdbaarheidsdatum }}</td>
                                <td>                                    
                                    <a href="{{ route('products.edit', ['product' => $product->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                                </td>
                                <!-- Add other columns as needed -->
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif

        <!-- Back Button -->
        <a href="{{ route('leveranciers.index') }}" class="btn btn-secondary mt-4">Terug naar Leveranciers Overzicht</a>

    </div>

    <!-- Bootstrap JS and dependencies (optional) -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
