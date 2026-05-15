<x-app-admin>
  <div class="container mt-5">
    <h1>Product</h1>

    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">
      Add Product
    </a>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>Product Code</th>
          <th>Product Name</th>
          <th>Quantity</th>
          <th>Unit</th>
          <th>Price</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>
        @foreach($products as $product)
        <tr>
          <td>{{ $product->code }}</td>
          <td>{{ $product->name }}</td>
          <td>{{ $product->quantity }}</td>
          <td>{{ $product->unit }}</td>
          <td>{{ $product->price }}</td>
          <td>
            <a href="{{ route('products.edit', $product->id) }}"
              class="btn btn-warning btn-sm">
              Edit
            </a>

            <form action="{{ route('products.destroy', $product->id) }}"
              method="POST"
              style="display:inline;">
              @csrf
              @method('DELETE')

              <button type="submit"
                class="btn btn-danger btn-sm">
                Delete
              </button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</x-app-admin>