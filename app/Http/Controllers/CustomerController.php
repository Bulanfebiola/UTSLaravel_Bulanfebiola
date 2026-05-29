<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('admin.customer.index', [
            'index' => Customer::all()
        ]);
    }

    public function create()
    {
        return view('admin.customer.create');
    }

    public function store(Request $request)
    {
        Customer::create([
             'code' => $request->code,
            'name' => $request->name,
            'address' => $request->address,
            'telephone' => $request->telephone,
            'email' => $request->email,
        ]);
        return redirect()->route('customers.index')->with('success', 'Customers created successfully.');
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('admin.customer.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->update([
            'code' => $request->code,
            'name' => $request->name,
            'address' => $request->address,
            'telephone' => $request->telephone,
            'email' => $request->email,
        ]);
        return redirect()->route('customers.index')->with('success', 'Customers update successfully.');
    }

    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return  redirect()->route('customers.index')->with('success', 'Customers update successfully.');
    }
}
