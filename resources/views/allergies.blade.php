<form action="{{ route('allergies.index') }}" method="GET">
    <label for="allergy">Select Allergy:</label>
    <select name="allergy" id="allergy">
        <option value="">All Allergies</option>
        @foreach ($allergies as $allergy)
            <option value="{{ $allergy->id }}">{{ $allergy->Name }}</option>
        @endforeach
    </select>
    <button type="submit">Filter</button>
</form>

<table>
    <thead>
        <tr>
            <th>Family Name</th>
            <th>Description</th>
            <th>Adults</th>
            <th>Kids</th>
            <th>Babies</th>
            <th>Representative Name</th>
            <th>Allergy Name</th>
            <th>Allergy Description</th>
            <!-- Add more headers as needed -->
        </tr>
    </thead>
    <tbody>
        @if ($familyDetails->isEmpty())
            <!-- Display a single row with a message if no families match the criteria -->
            <tr>
                <td colspan="8">Er zijn geen gezinnen bekend die de geselecteerde allergie hebben.</td>
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
                    <td>{{ $detail->AllergyName }}</td>
                    <td>{{ $detail->AllergyDescription }}</td>
                    <!-- Add more data cells as needed -->
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
