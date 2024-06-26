<div class="container">
        <h1>Edit Product</h1>

        <form action="{{ route('products.update', ['product' => $product->id]) }}" method="POST">
            @csrf
            @method('PUT') {{-- Use PUT method for updates --}}

            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" id="name" name="name" value="{{ $product->name }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="allergy">Allergy Type</label>
                <input type="text" id="allergy" name="allergy" value="{{ $product->allergy }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="barcode">Barcode</label>
                <input type="text" id="barcode" name="barcode" value="{{ $product->barcode }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="expiry_date">Expiry Date</label>
                <input type="date" id="expiry_date" name="expiry_date" value="{{ $product->expiry_date }}" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Update Product</button>
        </form>
    </div>