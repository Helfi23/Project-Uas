<?php

namespace App\Http\Controllers;

use App\Models\ModelDestinations;
use App\Models\ModelReviews;
use Illuminate\Http\Request;

class LandingController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = ModelReviews::all();
        $destination = ModelDestinations::all();
        return view('public.index', compact(['destination','reviews']));
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function show()
    // {
        

    //     return view('public.index', compact('mentors'));
    // }

}
