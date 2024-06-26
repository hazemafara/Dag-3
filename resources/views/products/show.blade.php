
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Product Details
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text"><strong>Description:</strong> {{ $product->description }}</p>
                        <p class="card-text"><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
                        <!-- Add more fields as needed -->

                        <div class="mt-3">
                            <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Products</a>
                            <a href="{{ route('products.edit', ['id' => $product->id]) }}" class="btn btn-primary">Edit Product</a>
                            <form action="{{ route('products.destroy', ['id' => $product->id]) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete Product</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
