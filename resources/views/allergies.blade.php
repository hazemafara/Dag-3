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
        </tr>
    </thead>
    <tbody>
        @foreach($familyDetails as $detail)
            <tr>
                <td>{{ $detail->FamilyName }}</td>
                <td>{{ $detail->FamilyDescription }}</td>
                <td>{{ $detail->Adults }}</td>
                <td>{{ $detail->Kids }}</td>
                <td>{{ $detail->Babies }}</td>
                <td>{{ $detail->RepresentativeName }}</td>
                <td>{{ $detail->AllergyName }}</td>
                <td>{{ $detail->AllergyDescription }}</td>
            </tr>
        @endforeach
    </tbody>
</table>