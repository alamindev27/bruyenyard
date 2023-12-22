<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PartnerData;
use Illuminate\Http\Request;

class AdminPartnerDataController extends Controller
{
    public function index() {
        $data = PartnerData::where('id', 1)->first();
        return view('admin.prtnerData.index', compact('data'));
    }

    public function update(Request $request) {
        $request->validate([
            'heading' => 'required | string | max:255',
            'text' => 'required | string | max:255',
            'file' => 'mimes:pdf',
            'image' => 'image | mimes:jpg,png,jpeg',
        ]);

        $partnerData = PartnerData::where('id', 1)->first();
        if ($request->hasFile('file')) {
            $arr = explode('/', $partnerData->file);
            $img = end($arr);
            if ($img != 'default.pdf') {
                unlink(base_path($partnerData->file));
            }
            $file = $request->file('file');
            $fileName = time().'-partner-file.'.$file->getClientOriginalExtension();
            $path = 'assets/uploads/pdf/';

            $request->file->move($path, $fileName);
            $partnerData->update([
                'file' => $path.$fileName
            ]);
        }

        if ($request->hasFile('image')) {
            $arr2 = explode('/', $partnerData->image);
            $img2 = end($arr2);
            if ($img2 != 'default-blockchain.png') {
                unlink(base_path($partnerData->image));
            }
            $file2 = $request->file('image');
            $fileName2 = time().'-blockchain-file.'.$file2->getClientOriginalExtension();
            $path2 = 'assets/uploads/partnerData/';

            $request->image->move($path2, $fileName2);
            $partnerData->update([
                'image' => $path2.$fileName2
            ]);
        }

        $partnerData->update([
            'heading' => $request->heading,
            'text' => $request->text,
        ]);
        return back()->with('success', 'Updted Successfully');
    }
}
