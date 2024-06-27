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
        
        <form id="allergyForm" action="{{ route('allergy.update', $person->id) }}" method="POST">
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
        
        <!-- Success message div -->
        <div id="successMessage" class="alert alert-success" style="display:none;">
            Allergy successfully updated!
        </div>
        <br>
    </div >
    <div class="float-right" style="width: 30%;">
        <a class="btn btn-primary" href="/">Home</a>
        <a class="btn btn-primary" href="/allergies">Terug</a>
    </div>
{{-- if sara allergy needs to be edited you get warning message  --}}
    @if ($person->id == 5)
    <div class="alert alert-danger">
        Voor het wijzigen van het allergie wordt het geadviseerd om een huisarts raad te plegen vanwege hoog risico op anafylactische shock.
    </div>
    @endif

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#allergyForm').on('submit', function(event) {
                event.preventDefault(); // Prevent the form from submitting immediately
                
                // Show the success message
                $('#successMessage').show();
                
                // Wait for 3 seconds, then submit the form
                setTimeout(function() {
                    $('#allergyForm').off('submit').submit(); // Submit the form
                }, 3000);
            });
        });
    </script>
</body>
</html>
