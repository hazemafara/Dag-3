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
    </style>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  @if(session('error'))
            <div class="alert alert-error">
                {{ session('error') }}
            </div>
        @elseif(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>
@if ($allergyDetails->isEmpty())
    <div class="alert alert-warning mt-4" role="alert">
        No details found for this family.
    </div>
@else
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <!-- Second Table for Person Details and Allergies -->
                <table class="table table-bordered table-striped">
                    <thead class="thead-light">
                        <tr>
                            <th>Person First Name</th>
                            <th>Person Last Name</th>
                            <th>Person Type</th>
                            <th>Allergy Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allergyDetails as $detail)
                            <tr>
                                <td>{{ $detail->PersonFirstName }}</td>
                                <td>{{ $detail->PersonLastName }}</td>
                                <td>{{ $detail->PersonType }}</td>
                                <td>{{ $detail->AllergyName }}</td>
                                <td><a href="{{ route('allergy.edit', ['id' => $detail->personId]) }}" class="btn btn-primary btn-sm">Edit</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-md-4">
                <!-- First Table for Family Name, Description, and Total People -->
                <table class="table table-bordered table-striped">
                    <thead class="thead-light">
                        <tr>
                            <th>Family Name</th>
                            <th>Description</th>
                            <th>Total People</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Display family info only once --}}
                        @foreach ($allergyDetails as $index => $detail)
                            @if ($index == 0) {{-- Display family info only for the first item --}}
                                <tr>
                                    <td>{{ $detail->FamilyName }}</td>
                                    <td>{{ $detail->FamilyDescription }}</td>
                                    <td>{{ $detail->TotalPeople }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endif

<!-- Include Bootstrap JS in your layout file (optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
