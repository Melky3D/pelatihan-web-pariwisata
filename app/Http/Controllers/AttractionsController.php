<?php

namespace App\Http\Controllers;
use App\Models\Attraction;
use Illuminate\Http\Request;

class AttractionsController extends Controller
{
    public function index(Request $request) 
    {
        $keyword = $request->input('search');
        if ($keyword) {
            $attractions = Attraction::where('name', 'like', "%$keyword%")->paginate(5);
        } else {
            $attractions = Attraction::paginate(5);
        }
        return view('pages.attractions.indexAttraction', compact('attractions'));
    }

    public function show($id)
    {
        $attraction = Attraction::find($id);
        return view('pages.attractions.detailAttraction', compact('attraction'));
    }

    public function create()
    {
        return view('pages.attractions.createAttraction');
    }

    public function store(Request $request)
    {

        Attraction::create($request->all());

        return redirect()->route('attraction.index')->with('success', 'Attraction created successfully.');
    }

    public function destroy($id)
    {
        $attraction = Attraction::find($id);
        if ($attraction) {
            $attraction->delete();
            return redirect()->route('attraction.index')->with('success', 'Attraction deleted successfully.');
        }else {
            return redirect()->route('attraction.index')->with('error', 'Attraction not found.');
        }

    }

    public function edit($id)
    {
        $attraction = Attraction::find($id);
        return view('pages.attractions.updateAttraction', compact('attraction'));
    }

    public function update(Request $request, $id)
    {
        $attraction = Attraction::find($id);
        if ($attraction) {
            $attraction->update($request->all());
            return redirect()->route('attraction.index')->with('success', 'Attraction updated successfully.');
        } else {
            return redirect()->route('attraction.index')->with('error', 'Attraction not found.');
        }
    }
}
