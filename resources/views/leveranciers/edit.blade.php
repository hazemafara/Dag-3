

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
        <h1>Edit Product: {{ $product->name }}</h1>

        <!-- <form method="POST" action="{{ route('products.update', ['product' => $product]) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="houdbaarheidsdatum">Expiry Date:</label>
                <input type="date" id="houdbaarheidsdatum" name="houdbaarheidsdatum" class="form-control" value="{{ $product->houdbaarheidsdatum }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Expiry Date</button>
        </form> -->
    </div>
    <!-- Bootstrap JS and dependencies (optional) -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
