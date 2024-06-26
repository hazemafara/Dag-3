<!-- resources/views/leveranciers/show.blade.php -->
@extends('layouts.app')

@section('content')
    @if ($leverancier) 
        <div class="container">
        <h1>{{ $leverancier->Naam }}</h1>
        
        <div class="mb-4">
            <h2>Leverancier Details</h2>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th style="width: 30%;">Naam:</th>
                        <td>{{ $leverancier->Naam }}</td>
                    </tr>
                    <tr>
                        <th>Leverancier Nummer:</th>
                        <td>{{ $leverancier->LeverancierNummer }}</td>
                    </tr>
                    <tr>
                        <th>Leverancier Type:</th>
                        <td>{{ $leverancier->LeverancierType }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div>
            <h2>Contacten</h2>
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Email</th>
                        <th>Mobiel</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($leverancier->contacts as $contact)
                        <tr>
                            <td>{{ $contact->Email }}</td>
                            <td>{{ $contact->Mobiel }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div>
            <h2>Producten</h2>
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Naam</th>
                        <th>Soort Allergie</th>
                        <th>Barcode</th>
                        <th>Houdbaarheidsdatum</th>
                        <th>Acties</th>
                    </tr>
                </thead>
                <tbody>
                <tbody>
                    @foreach ($leverancier->products ?? [] as $product)
                        <tr>
                            <td>{{ $product->Naam }}</td>
                            <td>{{ $product->SoortAllergie }}</td>
                            <td>{{ $product->Barcode }}</td>
                            <td>{{ $product->Houdbaarheidsdatum }}</td>
                            <td>
                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">Details</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
    @else
        <p>Leverancier not found or does not exist.</p>
    @endif
@endsection
