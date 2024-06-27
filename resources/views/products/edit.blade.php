<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product: {{ $product->name }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Light gray background */
        }
        .container {
            margin-top: 50px; /* Add margin to top of container */
        }
    </style>
</head>
<body>
    <div class="container">
        @if(session('error'))
            <div class="alert alert-error alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <h1>Edit Product: {{ $product->name }}</h1>

        <form method="POST" action="{{ route('products.update', ['product' => $product->id]) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="Houdbaarheidsdatum">Expiry Date:</label>
                <input type="date" id="Houdbaarheidsdatum" name="Houdbaarheidsdatum" class="form-control" value="{{ $product->Houdbaarheidsdatum }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Expiry Date</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies (optional) -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
