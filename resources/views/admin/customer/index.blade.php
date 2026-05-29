<x-app-admin>
  <div class="container mt-5">
    <h1>Customer</h1>

    <a href="{{ route('customers.create') }}" class="btn btn-primary mb-3">
      Add Customer
    </a>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>Code</th>
          <th>Name</th>
          <th>Address</th>
          <th>Telephone</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>
        @foreach($index as $customer)
        <tr>
          <td>{{ $customer->code }}</td>
          <td>{{ $customer->name }}</td>
          <td>{{ $customer->address }}</td>
          <td>{{ $customer->telephone }}</td>
          <td>{{ $customer->email }}</td>
          <td>
            <a href="{{ route('customers.edit', $customer->id) }}"
              class="btn btn-warning btn-sm">
              Edit
            </a>

            <form action="{{ route('customers.destroy', $customer->id) }}"
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