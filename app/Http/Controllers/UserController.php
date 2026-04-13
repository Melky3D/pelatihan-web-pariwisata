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
        return view('pages.indexUser', compact('users'));
    }

    public function show($id)
    {
        $detailUser = User::find($id);
        return view('pages.detailUser', compact('detailUser'));
    }

    public function create()
    {
        return view('pages.createUser');
    }

    public function store(Request $request)
    {

        User::create($request->all());

        return redirect('user')->with('success', 'User created successfully.');
    }

    public function delete($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return redirect('/user')->with('success', 'User deleted successfully.');
        }else {
            return redirect('/user')->with('error', 'User not found.');
        }

    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('pages.updateUser', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if ($user) {
            $user->update($request->all());
            return redirect('/user')->with('success', 'User updated successfully.');
        } else {
            return redirect('/user')->with('error', 'User not found.');
        }
    }
}
