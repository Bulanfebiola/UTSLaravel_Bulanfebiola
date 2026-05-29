<x-app-admin>
  <div class="container mt-5">
    <h1>Create Product</h1>

    <form action="{{ route('products.store') }}" method="POST">
      @csrf

      <div class="mb-3">
        <label for="code" class="form-label">Code</label>
        <input type="text" class="form-control" id="code" name="code" required>
      </div>

      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
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
        <input type="number" class="form-control" id="price" name="price" value="{{ $product->price ?? '' }}" required>
      </div>

      <button type="submit" class="btn btn-primary">Create Product</button>
    </form>
  </div>
</x-app-admin>