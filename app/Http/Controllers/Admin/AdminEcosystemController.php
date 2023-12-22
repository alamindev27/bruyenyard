<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ecosystem;
use Illuminate\Http\Request;

class AdminEcosystemController extends Controller
{
    public function index() {
        $ecosystem = Ecosystem::where('id', 1)->first();
        return view('admin.ecosystem.index', compact('ecosystem'));
    }

    public function update(Request $request) {
        $request->validate([
            'heading' => 'required | string | max:255',
            'text' => 'required | string | max:255',
            'file' => 'mimes:pdf',
            'image' => 'image | mimes:jpg,png,jpeg',
        ]);

        $ecosystem = Ecosystem::where('id', 1)->first();
        if ($request->hasFile('file')) {
            $arr = explode('/', $ecosystem->file);
            $img = end($arr);
            if ($img != 'default.pdf') {
                unlink(base_path($ecosystem->file));
            }
            $file = $request->file('file');
            $fileName = time().'-blockchain-file.'.$file->getClientOriginalExtension();
            $path = 'assets/uploads/pdf/';

            $request->file->move($path, $fileName);
            $ecosystem->update([
                'file' => $path.$fileName
            ]);
        }

        if ($request->hasFile('image')) {
            $arr2 = explode('/', $ecosystem->image);
            $img2 = end($arr2);
            if ($img2 != 'default-blockchain.png') {
                unlink(base_path($ecosystem->image));
            }
            $file2 = $request->file('image');
            $fileName2 = time().'-ecosystem-file.'.$file2->getClientOriginalExtension();
            $path2 = 'assets/uploads/ecosystem/';

            $request->image->move($path2, $fileName2);
            $ecosystem->update([
                'image' => $path2.$fileName2
            ]);
        }

        $ecosystem->update([
            'heading' => $request->heading,
            'text' => $request->text,
        ]);
        return back()->with('success', 'Updted Successfully');
    }
}
