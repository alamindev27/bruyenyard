<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RoadmapData;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminRoadmapDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roadmaps = RoadmapData::all();
        return view('admin.roadmap-data.index', compact('roadmaps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.roadmap-data.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required | string | max:255',
            'text' => 'required | string | max:255'
        ]);

        RoadmapData::insert([
            'name' => $request->name,
            'text' => $request->text,
            'created_at' => Carbon::now()
        ]);
        return back()->with('success', 'Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = RoadmapData::where('id', $id)->first();
        return view('admin.roadmap-data.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required | string | max:255',
            'text' => 'required | string | max:255'
        ]);
        $data = RoadmapData::where('id', $id)->first();
        $data->update([
            'name' => $request->name,
            'text' => $request->text
        ]);
        return back()->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $roadmap = RoadmapData::where('id', $id)->first();
        $roadmap->delete();
        return back()->with('success', 'Deleted Successfully');
    }
}
