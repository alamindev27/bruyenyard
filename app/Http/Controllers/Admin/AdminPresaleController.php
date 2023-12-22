<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PresaleInfo;
use Illuminate\Http\Request;

class AdminPresaleController extends Controller
{
    public function index() {
        $presale = PresaleInfo::where('id', 1)->first();
        return view('admin.presale.index', compact('presale'));
    }

    public function update(Request $request) {
        $request->validate([
            'heading' => 'required | string | max:255',
            'text' => 'required | string | max:255',
            'pre_sale' => 'required | numeric',
            'bounties' => 'required | numeric',
            'liquidity_pool' => 'required | numeric',
            'team' => 'required | numeric',
            'advisors' => 'required | numeric',
            'marketing_and_bd' => 'required | numeric',
            'pre_seed' => 'required | numeric',
            'image' => 'image | mimes:jpg,png,jpeg',
        ]);

        $presale = PresaleInfo::where('id', 1)->first();


        if ($request->hasFile('image')) {
            $arr2 = explode('/', $presale->image);
            $img2 = end($arr2);
            if ($img2 != 'default-presale.png') {
                unlink(base_path($presale->image));
            }
            $file2 = $request->file('image');
            $fileName2 = time().'-presale-file.'.$file2->getClientOriginalExtension();
            $path2 = 'assets/uploads/presale/';

            $request->image->move($path2, $fileName2);
            $presale->update([
                'image' => $path2.$fileName2
            ]);
        }

        $presale->update([
            'heading' => $request->heading,
            'text' => $request->text,
            'pre_sale' => $request->pre_sale,
            'bounties' => $request->bounties,
            'liquidity_pool' => $request->liquidity_pool,
            'team' => $request->team,
            'advisors' => $request->advisors,
            'marketing_and_bd' => $request->marketing_and_bd,
            'pre_seed' => $request->pre_seed,
        ]);
        return back()->with('success', 'Updted Successfully');
    }
}
