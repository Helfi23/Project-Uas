<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Mentor;
use App\Models\ModelDestinations;
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
        $mentors = Mentor::all();
        $destination = ModelDestinations::all();
        return view('public.index', compact(['destination','mentors']));
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
