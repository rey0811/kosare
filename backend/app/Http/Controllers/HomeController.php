<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('edit')->with('user', $user);
    }

    public function update(Request $request, $id)
    {
        $name = $request->input('name');
        $email = $request->input('email');

        $user = User::find($id);
        $user->name = $name;
        $user->email = $email;
        $user->save();

        return redirect()->route('home');
    }

}
