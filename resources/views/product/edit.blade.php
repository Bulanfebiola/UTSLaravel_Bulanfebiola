<x-app-admin>
  <div class="container mt-5">
    <h1>Edit Product</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
      @csrf
      @method('PUT')

      <div class="mb-3">
        <label for="code" class="form-label">Product Code</label>
        <input type="text" class="form-control" id="code" name="code" value="{{ $product->code }}" required>
      </div>

      <div class="mb-3">
        <label for="name" class="form-label">Product Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
      </div>

      <div class="mb-3">
        <label>Quantity</label>
        <input type="number" name="quantity" class="form-control">
      </div>

      <div class="mb-3">
        <label>Unit</label>

        <select name="unit" class="form-control">
          <option value="Pcs">Pcs</option>
          <option value="Kg">Kg</option>
          <option value="Liter">Liter</option>
          <option value="Box">Box</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control" id="price" name="price" required>
      </div>

      <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
  </div>
</x-app-admin>