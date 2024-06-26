<div class="container">
        <h1>Wijzig Product Per Leverancier</h1>

        <form action="{{ route('productperleverancier.update', ['leverancierId' => $productPerLeverancier->LeverancierId, 'productId' => $productPerLeverancier->ProductId]) }}" method="POST">
            @csrf
            @method('PUT') {{-- Gebruik PUT-methode voor updates --}}

            <div class="form-group">
                <label for="DatumAangeleverd">Datum Aangeleverd</label>
                <input type="date" id="DatumAangeleverd" name="DatumAangeleverd" value="{{ $productPerLeverancier->DatumAangeleverd }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="DatumEerstVolgendeLevering">Datum Eerstvolgende Levering</label>
                <input type="date" id="DatumEerstVolgendeLevering" name="DatumEerstVolgendeLevering" value="{{ $productPerLeverancier->DatumEerstVolgendeLevering }}" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Opslaan</button>
        </form>
    </div>