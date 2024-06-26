<!-- Include Bootstrap CSS in your layout file -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-4">
    <h2>Edit Allergy</h2>
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

    <button type="submit" class="btn btn-primary">Save Changes</button>
</form>
</div>

<!-- Include Bootstrap JS in your layout file (optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
