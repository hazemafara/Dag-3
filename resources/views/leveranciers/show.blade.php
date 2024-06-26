<!-- leveranciers/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $leverancier->Naam }}</h1>
        <p>Contactpersoon: {{ $leverancier->ContactPerson }}</p>
        <p>Leverancier Nummer: {{ $leverancier->LeverancierNummer }}</p>
        <p>Leverancier Type: {{ $leverancier->LeverancierType }}</p>

        <h2>Producten van {{ $leverancier->Naam }}</h2>
        @if($leverancier->producten->isEmpty())
            <p>Geen producten beschikbaar voor deze leverancier.</p>
        @else
            <ul>
                @foreach($leverancier->producten as $product)
                    <li>{{ $product->product_naam }}</li>
                    <!-- Toon andere relevante informatie over het product -->
                @endforeach
            </ul>
        @endif
    </div>
@endsection
