<?php

namespace App\Http\Controllers;
use App\Models\Attraction;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index(Request $request) 
    {
        $keyword = $request->input('search');
        if ($keyword) {
            $reviews = Review::where('name', 'like', "%$keyword%")->paginate(5);
        } else {
            $reviews = Review::paginate(5);
        }
        return view('pages.reviews.indexReview', compact('reviews'));
    }

    public function show($id)
    {
        $reviews = Review::with('attraction')->find($id);
        return view('pages.reviews.detailReview', compact('review'));
    }

    public function create()
    {
        $attraction = Attraction::all();
        return view('pages.reviews.createReview', compact('attraction'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'attraction_id' => 'required|exists:attractions,id',
            'name' => 'required|string|max:255',
            'comment' => 'nullable|string|max:255',
        ]);

        Review::create($validated);

        return redirect()->route('review.index')->with('success', 'Review created successfully.');
    }

    public function destroy($id)
    {
        $review = Review::find($id);
        if ($review) {
            $review->delete();
            return redirect()->route('review.index')->with('success', 'Review deleted successfully.');
        } else {
            return redirect()->route('review.index')->with('error', 'Review not found.');
        }

    }

    public function edit($id)
    {
        $attraction = Attraction::all();
        $review = Review::find($id);
        return view('pages.reviews.updateReview', compact('review', 'attraction'));
    }

    public function update(Request $request, $id)
    {

     $validated = $request->validate([
            'attraction_id' => 'required|exists:attractions,id',
            'name' => 'required|string|max:255',
            'comment' => 'nullable|string|max:255',
        ]);
        Review::find($id)->update($validated);

        $review = Review::find($id);
        if ($review) {
            $review->update($request->all());
            return redirect()->route('review.index')->with('success', 'Review updated successfully.');
        } else {
            return redirect()->route('review.index')->with('error', 'Review not found.');
        }
    }
}
