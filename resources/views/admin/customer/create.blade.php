<x-app-admin>
  <div class="container mt-5">
    <h1>Create Customer</h1>

    <form action="{{ route('customers.store') }}" method="POST">
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
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control" id="address" name="address" required>
      </div>

      <div class="mb-3">
        <label for="telephone" class="form-label">Telephone</label>
        <input type="number" class="form-control" id="telephone" name="telephone" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>

      <button type="submit" class="btn btn-primary">Create Customer</button>
    </form>
  </div>
</x-app-admin>