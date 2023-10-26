<?php

namespace App\Http\Controllers;

use App\Akun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AkunController extends Controller
{
    public function index()
    {
        $akuns = Akun::all();
        return view('akun.index', compact('akuns'));
    }

    public function create()
    {
        return view('akun.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'username' => 'required|max:10',
            'nama' => 'required|max:50',
            'password' => 'required|min:8', // Assuming you want a minimum of 8 characters
            'status' => 'required|numeric',
        ]);

        // Hash the password using SHA256
        $validatedData['password'] = hash('sha256', $request->password);

        // Create a new 'akun' record
        Akun::create($validatedData);

        return redirect()->route('akun.index')->with('success', 'Akun created successfully.');
    }

    public function show($id)
    {
        $akun = Akun::find($id);
        return view('akun.show', compact('akun'));
    }

    public function edit($id)
    {
        $akun = Akun::find($id);
        return view('akun.edit', compact('akun'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'username' => 'required|max:10',
            'nama' => 'required|max:50',
            'password' => 'required|min:8', // Assuming you want a minimum of 8 characters
            'status' => 'required|numeric',
        ]);

        // Hash the password using SHA256
        $validatedData['password'] = hash('sha256', $request->password);

        // Find the 'akun' record and update it
        $akun = Akun::find($id);
        $akun->update($validatedData);

        return redirect()->route('akun.index')->with('success', 'Akun updated successfully.');
    }

    public function destroy($id)
    {
        // Find the 'akun' record and delete it
        $akun = Akun::find($id);
        $akun->delete();

        return redirect()->route('akun.index')->with('success', 'Akun deleted successfully.');
    }
}

