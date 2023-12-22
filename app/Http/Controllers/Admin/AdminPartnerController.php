<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class AdminPartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = Partner::all();
        return view('admin.partner.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'logo' => 'required | image | mimes:jpg,png,jpeg',
        ]);
        $path = 'assets/uploads/partner/';
        $imgName = time().Str::random(5).'.'.$request->file('logo')->getClientOriginalExtension();
        Image::make($request->file('logo'))->resize(240, 150)->save(base_path($path.$imgName));
        Partner::insert([
            'logo' => $path.$imgName,
            'link' => $request->link,
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
        $partner = Partner::where('id', $id)->first();
        return view('admin.partner.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'logo' => 'image | mimes:jpg,png,jpeg',
        ]);
        $partner = Partner::where('id', $id)->first();
        if ($request->hasFile('logo')) {
            unlink(base_path($partner->logo));
            $path = 'assets/uploads/partner/';
            $imgName = time().Str::random(5).'.'.$request->file('logo')->getClientOriginalExtension();
            Image::make($request->file('logo'))->resize(120, 22)->save(base_path($path.$imgName));
            $partner->update([
                'logo' => $path.$imgName
            ]);
        }
        $partner->update([
            'link' => $request->link
        ]);
        return back()->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $partner = Partner::where('id', $id)->first();
        unlink(base_path($partner->logo));
        $partner->delete();
        return back()->with('success', 'Deleted Successfully');
    }
}
