<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Allergy</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Edit Allergy</h2>

        <!-- Waarschuwing als person->id gelijk is aan 5 -->
        
        <form action="{{ route('allergy.update', $person->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="allergy">Select Allergy:</label>
                <select name="allergy" id="allergy" class="form-control">
                    @foreach ($allergies as $allergyOption)
                    <option value="{{ $allergyOption->id }}" 
                        {{ $allergyOption->id == $allergy->id ? 'selected' : '' }}>
                        {{ $allergyOption->Name }}
                    </option>
                    @endforeach
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Wijzig Allergie</button>
        </form>
        <br>
    </div >
<div class="float-right" style="width: 30%;">
                <a class="btn btn-primary" href="/">Home</a>
            <a class="btn btn-primary" href="/allergies">Terug</a>
        </div>
       @if ($person->id == 5)
    <div class="alert alert-danger">
        Voor het wijzigen van het allergie wordt het geadviseerd om een huisarts raad te plegen vanwege hoog risico op anafylactische shock.
    </div>
@endif
    <!-- Include Bootstrap JS in your layout file (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
