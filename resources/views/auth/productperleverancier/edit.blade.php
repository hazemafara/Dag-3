<!-- resources/views/productperleverancier/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Edit Product Per Leverancier</h1>

        <form action="{{ route('productperleverancier.update', ['leverancierId' => $productPerLeverancier->LeverancierId, 'productId' => $productPerLeverancier->ProductId]) }}" method="POST" class="card p-4">
            @csrf
            @method('PUT') {{-- Use PUT method for updates --}}
            
            <div class="form-group">
                <label for="DatumAangeleverd" class="form-label">Datum Aangeleverd</label>
                <input type="date" id="DatumAangeleverd" name="DatumAangeleverd" value="{{ $productPerLeverancier->DatumAangeleverd }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="DatumEerstVolgendeLevering" class="form-label">Datum Eerstvolgende Levering</label>
                <input type="date" id="DatumEerstVolgendeLevering" name="DatumEerstVolgendeLevering" value="{{ $productPerLeverancier->DatumEerstVolgendeLevering }}" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Wijzig Houdbaarheidsdatum</button>
        </form>
    </div>
@endsection
