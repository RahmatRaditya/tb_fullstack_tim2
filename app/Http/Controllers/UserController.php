<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('sales_list', ['users' => $users]);

        // return $users;
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $userData = $request->all();
        $user = User::create($userData);

        return redirect()->route('users.index');
    }

    public function create()
    {
        return view('sales_form');
    }

    public function edit($id)
    {
        $users = User::find($id);
        return view('sales_edit', ['user' => $users]);
    }

    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = e($request->input('name'));
        $users->email = e($request->input('email'));
        $users->save();

        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect()->route('users.index');
    }
}