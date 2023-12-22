<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EcosystemData;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminEcosystemDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = EcosystemData::all();
        return view('admin.ecosystem-data.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ecosystem-data.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'heading' => 'required | string | max:255',
            'text' => 'required | string',
            'logo' => 'required | image | mimes:jpg,png,jpeg'
        ]);
        $file2 = $request->file('logo');
        $fileName2 = time().'-ecosystem-logo.'.$file2->getClientOriginalExtension();
        $path2 = 'assets/uploads/ecosystem/';
        $request->logo->move($path2, $fileName2);
        EcosystemData::insert([
            'heading' => $request->heading,
            'text' => $request->text,
            'logo' => $path2.$fileName2,
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
        $data = EcosystemData::where('id', $id)->first();
        return view('admin.ecosystem-data.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'heading' => 'required | string | max:255',
            'text' => 'required | string',
            'logo' => 'image | mimes:jpg,png,jpeg'
        ]);
        $data = EcosystemData::where('id', $id)->first();
        if($request->hasFile('logo')){
            unlink(base_path($data->logo));
            $file2 = $request->file('logo');
            $fileName2 = time().'-ecosystem-logo.'.$file2->getClientOriginalExtension();
            $path2 = 'assets/uploads/ecosystem/';
            $data->update([
                'logo' => $path2.$fileName2
            ]);
        }
        $data->update([
            'heading' => $request->heading,
            'text' => $request->text
        ]);
        return back()->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = EcosystemData::where('id', $id)->first();
        unlink(base_path($data->logo));
        $data->delete();
        return back()->with('succes', 'Deleted Successfully');
    }
}
