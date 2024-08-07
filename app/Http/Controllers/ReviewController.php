<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Review;

class ReviewController extends Controller
{
    public function index(Request $request)
    {
        $reviews = Review::all();

        return view('review.index', compact('reviews'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Review::create($request->all());
        return redirect()->route('home.index')->with('success', "Thank you for submitting a review!");
    }

    public function edit(Review $review)
    {
        return view('review.edit', compact('review'));
    }

    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->route('reviews.index')->with('success', 'Review deleted successfully');
    }


}
