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
            <th>Action</th> <!-- Added column for Action -->
        </tr>
    </thead>
    <tbody>
        @if ($familyDetails->isEmpty())
            <!-- Display a single row with a message if no families match the criteria -->
            <tr>
                <td colspan="8">Er zijn geen gezinnen bekend die de geselecteerde allergie hebben.</td>
            </tr>
        @else
     @foreach ($familyDetails as $detail)
    <tr>
        <td>{{ $detail->FamilyName }}</td>
        <td>{{ $detail->FamilyDescription }}</td>
        <td>{{ $detail->Adults }}</td>
        <td>{{ $detail->Kids }}</td>
        <td>{{ $detail->Babies }}</td>
        <td>{{ $detail->RepresentativeName }}</td>
        <td>{{ $detail->AllergyName }}</td>
        <!-- Create a link to a route passing family id -->
        <td><a href="{{ route('family.detail', ['id' => $detail->FamilyId]) }}">Details</a></td>
    </tr>
@endforeach
        @endif
    </tbody>
</table>
