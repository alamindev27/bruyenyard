<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Wallet;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminWalletController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Wallet::all();
        return view('admin.wallet.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.wallet.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required | string | max:255',
            'address' => 'required | string | max:255'
        ]);
        Wallet::insert([
            'name' => $request->name,
            'address' => $request->address,
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
        $data = Wallet::where('id', $id)->first();
        return view('admin.wallet.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required | string | max:255',
            'address' => 'required | string | max:255'
        ]);
        $data = Wallet::where('id', $id)->first();
        $data->update([
            'name' => $request->name,
            'address' => $request->address
        ]);
        return back()->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Wallet::where('id', $id)->first();
        $data->delete();
        return back()->with('success', 'Deleted Successfully');
    }
}
