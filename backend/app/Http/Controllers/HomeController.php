<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Storage;

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
        $image = $request->file('image');

        $user = User::find($id);
        $user->name = $name;
        $user->email = $email;

        // バケットの`user_image`フォルダへアップロード
        $path = Storage::disk('s3')->putFile('user_image', $image, 'public');

        // アップロードした画像のフルパスを取得
        $user->image_path = Storage::disk('s3')->url($path);

        $user->save();

        return redirect()->route('home');
    }

}
