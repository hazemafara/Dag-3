{{-- details.blade.php --}}

@if ($allergyDetails->isEmpty())
    <p>No details found for this family.</p>
@else
    <table>
        <thead>
            <tr>
                <th>Family Name</th>
                <th>Description</th>
                <th>Total People</th>
                <th>Person First Name</th>
                <th>Person Last Name</th>
                <th>Person Type</th>
                <th>Allergy Name</th>
                <th>Allergy Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allergyDetails as $detail)
                <tr>
                    <td>{{ $detail->FamilyName }}</td>
                    <td>{{ $detail->FamilyDescription }}</td>
                    <td>{{ $detail->TotalPeople }}</td>
                    <td>{{ $detail->PersonFirstName }}</td>
                    <td>{{ $detail->PersonLastName }}</td>
                    <td>{{ $detail->PersonType }}</td>
                    <td>{{ $detail->AllergyName }}</td>
                    <td>{{ $detail->AllergyDescription }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
