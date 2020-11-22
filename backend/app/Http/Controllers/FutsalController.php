<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Futsal;

class FutsalController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($place)
    {
        $futsals = Futsal::where('place', $place)->get();
        return view('futsal.index')->with('futsals', $futsals);
    }

    public function show($id)
    {
        $futsal = Futsal::find($id);
        return view('futsal.show')->with('futsal', $futsal);
    }
}
