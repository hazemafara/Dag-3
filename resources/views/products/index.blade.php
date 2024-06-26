<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Products
                        <a href="{{ route('products.create') }}" class="btn btn-primary float-right">Add New Product</a>
                    </div>
                    <div class="card-body">
                        @if ($products->count() > 0)
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->description }}</td>
                                            <td>${{ number_format($product->price, 2) }}</td>
                                            <td>
                                                <a href="{{ route('products.show', ['id' => $product->id]) }}" class="btn btn-info btn-sm">View</a>
                                                <a href="{{ route('products.edit', ['id' => $product->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                                <form action="{{ route('products.destroy', ['id' => $product->id]) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>No products found.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>