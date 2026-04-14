<?php

namespace App\Http\Controllers;
use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index(Request $request) 
    {
        $keyword = $request->input('search');
        if ($keyword) {
            $destinations = Destination::where('name', 'like', "%$keyword%")->paginate(5);
        } else {
            $destinations = Destination::paginate(5);
        }
        return view('pages.destinations.indexDestination', compact('destinations'));
    }

    public function show($id)
    {
        $destinasi = Destination::find($id);
        return view('pages.destinations.destinasi2', compact('destinasi'));
    }

    public function create()
    {
        return view('pages.destinations.createDestination');
    }

    public function store(Request $request)
    {

        Destination::create($request->all());

        return redirect()->route('destination.index')->with('success', 'Destination created successfully.');
    }

    public function destroy($id)
    {
        $destinasi = Destination::find($id);
        if ($destinasi) {
            $destinasi->delete();
            return redirect()->route('destination.index')->with('success', 'Destination deleted successfully.');
        }else {
            return redirect()->route('destination.index')->with('error', 'Destination not found.');
        }

    }

    public function edit($id)
    {
        $destinasi = Destination::find($id);
        return view('pages.destinations.updateDestination', compact('destinasi'));
    }

    public function update(Request $request, $id)
    {
        $destinasi = Destination::find($id);
        if ($destinasi) {
            $destinasi->update($request->all());
            return redirect()->route('destination.index')->with('success', 'Destination updated successfully.');
        } else {
            return redirect()->route('destination.index')->with('error', 'Destination not found.');
        }
    }
}
