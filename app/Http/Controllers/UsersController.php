<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Users';
        $listData = User::all();
        return view('users.index', compact('title', 'listData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Users';
        return view('users.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        // Simpan data ke dalam database
        User::create($request->all());

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('users.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = 'Users';
        $data = User::find($id);

        return view('users.edit', compact('data','title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        if ($request->password) {
            // validasi data
            $request->validate([
                'name' => 'required',
                'email' =>'required | email',
                'password' =>'required|min:6',
            ]);

            // Simpan data ke dalam database
            User::find($id)->update($request->all());
        } else {
            // validasi data
            $request->validate([
                'name' =>'required',
                'email' =>'required | email',
            ]);

            // Simpan data ke dalam database
            User::find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
        }



        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('users.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
