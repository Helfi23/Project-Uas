<?php

namespace App\Http\Controllers;

use App\Models\ModelDestinations;
use Illuminate\Http\Request;

class DestinationsController extends Controller
{
  
    public function index()
    {
        $destination = ModelDestinations::all();

        return view('destinations.index', compact('destination'));
    }

    public function create()
    {
        return view('destinations.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'location' => 'required',
            'description' => 'required'
        ]);

        $destination = new ModelDestinations();
        $destination->name = $request->name;
        $destination->location = $request->location;
        $destination->type = $request->type;
        $destination->description = $request->description;

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $destination->photo = $name;
        }

        $destination->save();

        return redirect()->route('destinations.index')->with('success', 'destination created successfully.');
    }


    public function show(ModelDestinations $destination)
    {
        return view('destinations.show', compact('destination'));
    }

    public function edit(ModelDestinations $destination)
    {
        return view('destinations.edit', compact('destination'));
    }

    public function update(Request $request, ModelDestinations $destination)
    {
        $request->validate([
            'name' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'location' => 'required',
            'type' => 'required',
            'description' => 'required'
        ]);

        $destination->name = $request->name;
        $destination->type = $request->type;
        $destination->location = $request->location;
        $destination->description = $request->description;

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $destination->photo = $name;
        }

        $destination->save();
        return redirect()->route('destinations.index')->with('success', 'destination updated successfully.');
    }

    public function destroy(ModelDestinations $destination)
    {
        $destination->delete();
        return redirect()->route('destinations.index')->with('success', 'destination deleted successfully.');
    }
}
