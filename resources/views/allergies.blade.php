<!-- Include Bootstrap CSS in your layout file -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
 <style>
        /* Custom CSS to match the uploaded photo's styling */
        .custom-table thead th {
            background-color: #f8f9fa;
            color: black;
            text-align: left;
        }
        .custom-table tbody td {
            text-align: left;
        }
        .custom-table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .btn-info {
            background-color: #007bff;
            border: none;
        }
        .btn-info:hover {
            background-color: #0056b3;
        }
         .custom-table thead th {
            background-color: #f8f9fa;
            color: black;
            text-align: left;
        }
        .custom-table tbody td {
            text-align: left;
        }
        .custom-table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .btn-info {
            background-color: #007bff;
            border: none;
        }
        .btn-info:hover {
            background-color: #0056b3;
        }
        .header {
            color: green;
        }
    </style>
<div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="header">Overzicht gezinnen met allergieën</h1>
            <form action="{{ route('allergies.index') }}" method="GET" class="form-inline">
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
        </div>       <table class="table custom-table">
            <thead>
                <tr>
                    <th>Naam</th>
                    <th>Omschrijving</th>
                    <th>Volwassenen</th>
                    <th>Kinderen</th>
                    <th>Babys</th>
                    <th>Vertegenwoordiger</th>
                    <th>Allergie Details</th> 
                </tr>
            </thead>
            <tbody>
                @if ($familyDetails->isEmpty())
                    <!-- Display a single row with a message if no families match the criteria -->
                    <tr>
                        <td colspan="7" class="text-center">Er zijn geen gezinnen bekend die de geselecteerde allergie hebben.</td>
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
<td><a href="{{ route('family.detail', ['id' => $detail->FamilyId]) }}"><img src="https://cdn-icons-png.flaticon.com/512/1250/1250680.png" alt="Details" style="width: 24px; height: 24px;"></a></td>                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        <a href="{{ route('home') }}" class="btn btn-primary">Home</a>
    </div>
</body>
</div>

<!-- Include Bootstrap JS in your layout file (optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
