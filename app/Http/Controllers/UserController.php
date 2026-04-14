<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request) 
    {
        $keyword = $request->input('search');
        if ($keyword) {
            $users = User::where('name', 'like', "%$keyword%")->paginate(5);
        } else {
            $users = User::paginate(5);
        }
        return view('pages.users.indexUser', compact('users'));
    }

    public function show($id)
    {
        $detailUser = User::find($id);
        return view('pages.users.detailUser', compact('detailUser'));
    }

    public function create()
    {
        return view('pages.users.createUser');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

        $data = $request->all();
        $data['password'] = bcrypt($data['password']);

        User::create($data);

        return redirect()->route('user.index')->with('success', 'User created successfully.');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return redirect()->route('user.index')->with('success', 'User deleted successfully.');
        }else {
            return redirect()->route('user.index')->with('error', 'User not found.');
        }

    }

    public function edit($id)
    {
        $user = User::find($id);  
        return view('pages.users.updateUser', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if ($user) {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email,' . $id,
                'password' => 'nullable|min:8',
            ]);

            $data = $request->only(['name', 'email']);
            if ($request->filled('password')) {
                $data['password'] = bcrypt($request->password);
            }

            $user->update($data);
            return redirect()->route('user.index')->with('success', 'User updated successfully.');
        } else {
            return redirect()->route('user.index')->with('error', 'User not found.');
        }
    }
}
