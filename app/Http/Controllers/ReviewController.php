<?php

namespace App\Http\Controllers;

use App\Models\ModelReviews;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = ModelReviews::all();

        return view('reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reviews.create');
    }
    /**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'profession' => 'required',
        'description' => 'required'
    ]);

    $review = new ModelReviews();
    $review->name = $request->name;
    $review->profession = $request->profession;
    $review->description = $request->description;

    if ($request->hasFile('photo')) {
        $image = $request->file('photo');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        $review->photo = $name;
    }

    $review->save();

    return redirect()->route('reviews.index')->with('success', 'Reviews created successfully.');
}


public function show(ModelReviews $review)
{
    return view('reviews.show', compact('review'));
}


public function edit(ModelReviews $review)
{
    return view('reviews.edit', compact('review'));
}


public function update(Request $request, ModelReviews $review)
{
    $request->validate([
        'name' => 'required',
        'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'profession' => 'required',
        'description' => 'required'
    ]);

    $review->name = $request->name;
    $review->profession = $request->profession;
    $review->description = $request->description;

    if ($request->hasFile('photo')) {
        $image = $request->file('photo');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        $review->photo = $name;
    }

    $review->save();
    return redirect()->route('reviews.index')->with('success', 'Reviews updated successfully.');
}

public function destroy(ModelReviews $review)
{
    $review->delete();
    return redirect()->route('reviews.index')->with('success', 'Review deleted successfully.');
}
}
