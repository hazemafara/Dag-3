<!-- Include Bootstrap CSS in your layout file -->
<style>
    /* Styling for alerts */
    .alert {
        margin-top: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(202, 21, 21, 0.1);
        padding: 10px;
        font-size: 16px;
        animation: fadeOut 5s ease-in-out forwards;
        opacity: 1; /* Ensure initial opacity is set */
    }

    /* Success alert styling */
    .alert-success {
        background-color: #dff0d8;
        color: #61a162;
        border-color: #d6e9c6;
    }

    /* Error alert styling */
    .alert-error {
        background-color: #f8d7da;
        color: #721c24;
        border-color: #f5c6cb;
    }

    /* Table styling */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    table th, table td {
        border: 1px solid #ddd;
    }

    table th {
        text-align: left;
        background-color: #f2f2f2;
        font-weight: bold;
    }

    .container {
        margin-top: 20px;
    }

    /* Define the fadeOut animation */
    @keyframes fadeOut {
        0% {
            opacity: 1;
        }
        80% {
            opacity: 1;
        }
        100% {
            opacity: 0;
            display: none;
        }
    }

    /* Header 2 styling */
    h2 {
        color: green;
    }
</style>

<!-- Include Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Display error or success messages -->
@if(session('error'))
    <div class="alert alert-error">
        {{ session('error') }}
    </div>
@elseif(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<!-- Check if there are no allergy details found -->
@if ($allergyDetails->isEmpty())
    <div class="alert alert-warning mt-4" role="alert">
        No details found for this family.
    </div>
@else
    <!-- Display allergy details -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-5">
                <!-- Display family-specific information -->
                <h2>Allergies in the Family</h2>
                <br>
                <table class="table table-bordered">
                    <tbody>
                        {{-- Display family info only once --}}
                        @foreach ($allergyDetails as $index => $detail)
                            @if ($index == 0) {{-- Display family info only for the first item --}}
                                <tr>
                                    <th>Family Name</th>
                                    <td>{{ $detail->FamilyName }}</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>{{ $detail->FamilyDescription }}</td>
                                </tr>
                                <tr>
                                    <th>Total People</th>
                                    <td>{{ $detail->TotalPeople }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-md-4">
                <!-- This column is empty in your current code -->
            </div>
        </div>

        <!-- Display detailed allergy information -->
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-striped" style="width: 100%;">
                    <thead class="thead-light">
                        <tr>
                            <th>Name</th>
                            <th>Person Type</th>
                            <th>Gezinsrol</th>
                            <th>Allergy Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allergyDetails as $detail)
                            <tr>
                                <td>{{ $detail->PersonFirstName . ' ' . $detail->PersonLastName }}</td>
                                <td>{{ $detail->PersonType }}</td>
                                <td>{{ $detail->IsRepresentative == 1 ? 'Vertegenwoordiger' : 'Familie lid' }}</td>
                                <td>{{ $detail->AllergyName }}</td>
                                <td><a href="{{ route('allergy.edit', ['id' => $detail->personId]) }}"><img src="https://icons.veryicon.com/png/o/miscellaneous/linear-small-icon/edit-246.png" alt="Edit" style="width: 24px; height: 24px;"></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Buttons for navigation -->
        <div class="float-right">
            <a class="btn btn-primary" href="/">Home</a>
            <a class="btn btn-primary" href="/allergies">Terug</a>
        </div>
    </div>
@endif

<!-- Include Bootstrap JS in your layout file (optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
