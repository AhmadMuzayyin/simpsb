<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserAdminController extends Controller
{
    public function index()
    {
        $users = User::where('level', 'admin')->get();
        return view('home.admin.user.index', compact('users'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ]);
        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            if ($request->password) {
                $user->password = Hash::make($request->password);
            }
            $user->level = 'admin';
            $user->save();
            return redirect()->back()->with('success', 'Berhasil menambahkan admin');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Gagal menambahkan admin');
        }
    }
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,' . $user->id,
        ]);
        try {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->level = $request->level;
            if ($request->password) {
                $user->password = Hash::make($request->password);
            }
            $user->save();
            return redirect()->back()->with('success', 'Berhasil mengubah admin');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Gagal mengubah admin');
        }
    }
    public function destroy(User $user)
    {
        try {
            $user->delete();
            return redirect()->back()->with('success', 'Berhasil menghapus admin');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Gagal menghapus admin');
        }
    }
}
