<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Str;

class AdminTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();
        return view('admin.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required | string | max:255',
            'designation' => 'required | string | max:255',
            'image' => 'required | image | mimes:jpg,png,jpeg'
        ]);
        $path = 'assets/uploads/team/';
        $imgName = time().Str::random(5).'.'.$request->file('image')->getClientOriginalExtension();
        Image::make($request->file('image'))->resize(270, 252)->save(base_path($path.$imgName));
        Team::insert([
            'name' => $request->name,
            'designation' => $request->designation,
            'image' => $path.$imgName,
            'fb' => $request->facebook_link,
            'li' => $request->linkedin_link,
            'ins' => $request->instagram_link,
            'wa' => $request->whatsapp_number,
            'git' => $request->github_link,
            'created_at' => Carbon::now()
        ]);
        return back()->with('success', 'Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $team = Team::where('id', $id)->first();
        return view('admin.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required | string | max:255',
            'designation' => 'required | string | max:255',
            'image' => ' image | mimes:jpg,png,jpeg'
        ]);
        $team = Team::where('id', $id)->first();
        if ($request->hasFile('image')) {
            unlink(base_path($team->image));
            $path = 'assets/uploads/team/';
            $imgName = time().Str::random(5).'.'.$request->file('image')->getClientOriginalExtension();
            Image::make($request->file('image'))->resize(270, 252)->save(base_path($path.$imgName));
            $team->update([
                'image' => $path.$imgName,
            ]);
        }
        $team->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'fb' => $request->facebook_link,
            'li' => $request->linkedin_link,
            'ins' => $request->instagram_link,
            'wa' => $request->whatsapp_number,
            'git' => $request->github_link
        ]);
        return back()->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $team = Team::where('id', $id)->first();
        unlink(base_path($team->image));
        $team->delete();
        return back()->with('success', 'Deleted Successfully');
    }
}
