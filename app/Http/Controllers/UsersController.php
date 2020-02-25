<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function create()
    {
        return view('users.create');
    }

    public function index()
    {
        return view('users.index');
    }
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }
    public function store()
    {
        return view('user.store');
    }
}
