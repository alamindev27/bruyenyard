<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Counter;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminCounterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $counters = Counter::orderBy('created_at', 'DESC')->get();
        return view('admin.coiunter.index', compact('counters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.coiunter.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required | string | max:255',
            'circle_amount' => 'required | numeric | min:1 | max:100',
            'bonus_amount' => 'required | numeric | min:1 | max:100',
            'start_date' => 'required',
            'end_date' => 'required | ',
        ]);

        Counter::insert([
            'name' => $request->name,
            'circle_amount' => $request->circle_amount,
            'bonus_amount' => $request->bonus_amount,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
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
        $counter = Counter::where('id', $id)->first();
        return view('admin.coiunter.edit', compact('counter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'name' => 'required | string | max:255',
            'circle_amount' => 'required | numeric | min:1 | max:100',
            'bonus_amount' => 'required | numeric | min:1 | max:100',
            'start_date' => 'required',
            'end_date' => 'required | ',
        ]);
        $counter = Counter::where('id', $id)->first();

        $counter->update([
            'name' => $request->name,
            'circle_amount' => $request->circle_amount,
            'bonus_amount' => $request->bonus_amount,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date
        ]);
        return back()->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $counter = Counter::where('id', $id)->first();
        $counter->delete();
        return back()->with('success', 'Deleted Successfully');
    }

    public function takeSalecount() {
        return view('admin.coiunter.take-sale-counter');
    }

    public function takeSalecountUpdate(Request $request) {
        $request->validate([
            'day' => 'required | numeric | min:1',
            'status' => 'required | string',
        ]);
        setting()->update([
            'take_sale_count' => Carbon::now()->addDays($request->day),
            'take_sale_count_status' => $request->status
        ]);
        return back()->with('success', 'Updated Successfully');
    }
}
