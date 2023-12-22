<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PresaleRaise;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminPresaleRaiseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = PresaleRaise::orderBy('created_at', 'DESC')->get();
        return view('admin.presale-raise.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.presale-raise.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'token_allocation' => 'required | string | max:255',
            'allocation_percentage' => 'required',
            'allocation_amount' => 'required',
            'token' => 'required',
        ]);

        PresaleRaise::insert([
            'token_allocation' => $request->token_allocation,
            'allocation_percentage' => $request->allocation_percentage,
            'allocation_amount' => $request->allocation_amount,
            'token' => $request->token,
            'discount_price' => $request->discount_price,
            'USD_value' => $request->USD_value,
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
        $data = PresaleRaise::where('id', $id)->first();
        return view('admin.presale-raise.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = PresaleRaise::where('id', $id)->first();
        $request->validate([
            'token_allocation' => 'required | string | max:255',
            'allocation_percentage' => 'required',
            'allocation_amount' => 'required',
            'token' => 'required',
        ]);
        $data->update([
            'token_allocation' => $request->token_allocation,
            'allocation_percentage' => $request->allocation_percentage,
            'allocation_amount' => $request->allocation_amount,
            'token' => $request->token,
            'discount_price' => $request->discount_price,
            'USD_value' => $request->USD_value
        ]);
        return back()->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = PresaleRaise::where('id', $id)->first();
        $data->delete();
        return back()->with('success', 'Deleted Successfully');
    }
}
