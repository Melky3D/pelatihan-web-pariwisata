<?php

namespace App\Http\Controllers;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
         $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'location' => 'required|string|max:255',
            'working_day'=> 'required|string|max:255',
            'working_hour'=> 'required|string|max:255',
            'ticket_price'=> 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('destinations', 'public');
        }

        Destination::create($validated);

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
         $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'location' => 'required|string|max:255',
            'working_day'=> 'required|string|max:255',
            'working_hour'=> 'required|string|max:255',
            'ticket_price'=> 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048'
        ]);

        $destinasi = Destination::find($id);
        if (! $destinasi) {
            return redirect()->route('destination.index')->with('error', 'Destination not found.');
        }

        if ($request->hasFile('image')) {
            if ($destinasi->image && Storage::disk('public')->exists($destinasi->image)) {
                Storage::disk('public')->delete($destinasi->image);
            }
            $validated['image'] = $request->file('image')->store('destinations', 'public');
        }

        $destinasi->update($validated);

        return redirect()->route('destination.index')->with('success', 'Destination updated successfully.');
    }
}
