<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        // 1. Lakukan Validasi
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'role' => 'required|in:admin,gudang,kasir',
            'password' => 'required|min:8',
        ]);

        // 2. Jika validasi gagal, kembalikan response JSON error
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        // 3. Jika berhasil, simpan ke database
        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'role'     => $request->role,
            'password' => Hash::make($request->password),
        ]);

        // 4. Kembalikan response JSON sukses
        return response()->json([
            'status' => 'success',
            'message' => 'Akun staf berhasil ditambahkan tanpa reload!'
        ]);
    }
}