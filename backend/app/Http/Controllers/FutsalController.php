<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Futsal;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

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

    public function create($id)
    {
        $futsal = Futsal::find($id);
        return view('futsal.create')->with('futsal', $futsal);
    }

    public function store(Request $request, $futsal_id)
    {
        $user_id = Auth::id();
        $date = $request->input('date');
        $star = $request->input('star');
        $content = $request->input('content');

        $review = new Review();
        $review->create([
            'user_id' => $user_id,
            'futsal_id' => $futsal_id,
            'date' => $date,
            'star' => $star,
            'content' => $content
        ]);
        return redirect()->route('futsal.show', ['id' => $futsal_id]);
    }

}
