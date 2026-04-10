<?php

namespace App\Http\Controllers;
use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index() 
    {
        $destinations = Destination::all();
        return view('pages.indexDestination', compact('destinations'));
    }

    public function show($id)
    {
        $destinasi = Destination::find($id);
        return view('pages.destinasi2', compact('destinasi'));
    }

    public function create()
    {
        return view('pages.createDestination');
    }

    public function store(Request $request)
    {

        Destination::create($request->all());

        return redirect('destination')->with('success', 'Destination created successfully.');
    }

    public function delete($id)
    {
        $destinasi = Destination::find($id);
        if ($destinasi) {
            $destinasi->delete();
            return redirect('/destination')->with('success', 'Destination deleted successfully.');
        }else {
            return redirect('/destination')->with('error', 'Destination not found.');
        }

    }

    public function edit($id)
    {
        $destinasi = Destination::find($id);
        return view('pages.updateDestination', compact('destinasi'));
    }

    public function update(Request $request, $id)
    {
        $destinasi = Destination::find($id);
        if ($destinasi) {
            $destinasi->update($request->all());
            return redirect('/destination')->with('success', 'Destination updated successfully.');
        } else {
            return redirect('/destination')->with('error', 'Destination not found.');
        }
    }
}
