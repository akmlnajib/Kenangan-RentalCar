<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
//M}r8o-}ZNWSX
//re_XZqQoSeD_K5oLJwUnm9CGpiA16sDXjxcj
//xwzk oixq pyph uoqi
class UserController extends Controller
{
    public function index()
    {
        $firstUserId = User::orderBy('created_at')->value('id');
        $users = User::where('id', '!=', auth()->id())
            ->where('id', '!=', $firstUserId)
            ->get();
        return view('admin.users.index', compact('users', 'firstUserId'));
    }

    public function create()
    {
        $firstUserId = User::orderBy('created_at')->value('id');

        if (auth()->id() != $firstUserId) {
            return redirect()->route('admin.dashboard')
                         ->with(abort(403, 'Anda tidak mempunyai hak akses.'), 'Anda tidak mempunyai hak akses.');
        }
        return view('admin.users.create', compact('firstUserId'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'Administator',
            'remember_token' => Str::random(60),
            
        ]);
        return redirect()->route('admin.users.index')->with('success', 'User created successfully.');
    }

    public function edit(User $user)
    {
        $firstUserId = User::orderBy('created_at')->value('id');

        if (auth()->id() != $firstUserId) {
            return redirect()->route('admin.dashboard')
                         ->with(abort(403, 'Anda tidak mempunyai hak akses.'), 'Anda tidak mempunyai hak akses.');
        }
        return view('admin.users.edit', compact('user', 'firstUserId'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8',
            'role' => 'required|string',
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
            'role' => $request->role,
        ]);

        return redirect()->route('admin.users.index')->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully.');
    }
}
