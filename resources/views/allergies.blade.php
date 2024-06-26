<!-- Include Bootstrap CSS in your layout file -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-4">
    <form action="{{ route('allergies.index') }}" method="GET" class="form-inline mb-4">
        <div class="form-group mr-2">
            <label for="allergy" class="mr-2">Select Allergy:</label>
            <select name="allergy" id="allergy" class="form-control">
                <option value="">All Allergies</option>
                @foreach ($allergies as $allergy)
                    <option value="{{ $allergy->id }}">{{ $allergy->Name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Filter</button>
    </form>

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Family Name</th>
                <th>Description</th>
                <th>Adults</th>
                <th>Kids</th>
                <th>Babies</th>
                <th>Representative Name</th>
                <th>Action</th> <!-- Added column for Action -->
            </tr>
        </thead>
        <tbody>
            @if ($familyDetails->isEmpty())
                <!-- Display a single row with a message if no families match the criteria -->
                <tr>
                    <td colspan="8" class="text-center">Er zijn geen gezinnen bekend die de geselecteerde allergie hebben.</td>
                </tr>
            @else
                <!-- Iterate over $familyDetails and display each family's details -->
                @foreach ($familyDetails as $detail)
                    <tr>
                        <td>{{ $detail->FamilyName }}</td>
                        <td>{{ $detail->FamilyDescription }}</td>
                        <td>{{ $detail->Adults }}</td>
                        <td>{{ $detail->Kids }}</td>
                        <td>{{ $detail->Babies }}</td>
                        <td>{{ $detail->RepresentativeName }}</td>
                        <!-- Create a link to a route passing family id -->
                        <td><a href="{{ route('family.detail', ['id' => $detail->FamilyId]) }}" class="btn btn-info btn-sm">Details</a></td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>

<!-- Include Bootstrap JS in your layout file (optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
