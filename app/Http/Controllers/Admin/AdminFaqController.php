<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminFaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Faq::all();
        return view('admin.faq.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required | string | max:255 | unique:faqs',
            'answer' => 'required | string | max:255',
        ]);
        Faq::insert([
            'question' => $request->question,
            'answer' => $request->answer,
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
        $data = Faq::where('id', $id)->first();
        return view('admin.faq.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Faq::where('id', $id)->first();
        $request->validate([
            'question' => 'required | string | max:255 | unique:faqs,question,'.$data->id.',id',
            'answer' => 'required | string | max:255',
        ]);
        $data->update([
            'question' => $request->question,
            'answer' => $request->answer
        ]);
        return back()->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Faq::where('id', $id)->first();
        $data->delete();
        return back()->with('success', 'Deleted Successfully');
    }
}
