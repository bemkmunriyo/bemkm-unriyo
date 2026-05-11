<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AkunController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | INDEX
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $users = User::latest()->get();

        return view('superadmin.akun.index', compact('users'));
    }

    /*
    |--------------------------------------------------------------------------
    | CREATE
    |--------------------------------------------------------------------------
    */

    public function create()
    {
        return view('superadmin.akun.create');
    }

    /*
    |--------------------------------------------------------------------------
    | STORE
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required',

        ]);

        User::create([

            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,

            'password' => Hash::make($request->password),

            'role' => $request->role,

            'nama_organisasi' => $request->name,

            'status' => 'aktif',

        ]);

        return redirect()
            ->route('superadmin.akun.index')
            ->with('success', 'Akun berhasil dibuat');
    }

    /*
    |--------------------------------------------------------------------------
    | EDIT
    |--------------------------------------------------------------------------
    */

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('superadmin.akun.edit', compact('user'));
    }

    /*
    |--------------------------------------------------------------------------
    | UPDATE
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, $id)
{
    $user = User::findOrFail($id);

    $request->validate([

        'name' => 'required',
        'username' => 'required|unique:users,username,' . $user->id,
        'email' => 'required|email|unique:users,email,' . $user->id,
        'role' => 'required',

    ]);

    $data = [

        'name' => $request->name,
        'username' => $request->username,
        'email' => $request->email,
        'role' => $request->role,
        'status' => $request->status,

    ];

    /*
    |--------------------------------------------------------------------------
    | UPDATE PASSWORD JIKA DIISI
    |--------------------------------------------------------------------------
    */

    if ($request->password) {

        $data['password'] = bcrypt($request->password);

    }

    $user->update($data);

    return redirect()
        ->route('superadmin.akun.index')
        ->with('success', 'Akun berhasil diupdate');
}

    /*
    |--------------------------------------------------------------------------
    | DELETE
    |--------------------------------------------------------------------------
    */

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()
            ->route('superadmin.akun.index')
            ->with('success', 'Akun berhasil dihapus');
    }
}