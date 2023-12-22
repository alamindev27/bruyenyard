<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blockchain;
use Illuminate\Http\Request;

class AdminBlockchainController extends Controller
{
    public function index() {
        $blockchain = Blockchain::where('id', 1)->first();
        return view('admin.blockchain.index', compact('blockchain'));
    }

    public function update(Request $request) {
        $request->validate([
            'heading' => 'required | string | max:255',
            'text' => 'required | string | max:255',
            'file' => 'mimes:pdf',
            'image' => 'image | mimes:jpg,png,jpeg',
        ]);

        $blockchain = Blockchain::where('id', 1)->first();
        if ($request->hasFile('file')) {
            $arr = explode('/', $blockchain->file);
            $img = end($arr);
            if ($img != 'default.pdf') {
                unlink(base_path($blockchain->file));
            }
            $file = $request->file('file');
            $fileName = time().'-blockchain-file.'.$file->getClientOriginalExtension();
            $path = 'assets/uploads/pdf/';

            $request->file->move($path, $fileName);
            $blockchain->update([
                'file' => $path.$fileName
            ]);
        }

        if ($request->hasFile('image')) {
            $arr2 = explode('/', $blockchain->image);
            $img2 = end($arr2);
            if ($img2 != 'default-blockchain.png') {
                unlink(base_path($blockchain->image));
            }
            $file2 = $request->file('image');
            $fileName2 = time().'-blockchain-file.'.$file2->getClientOriginalExtension();
            $path2 = 'assets/uploads/blokchain/';

            $request->image->move($path2, $fileName2);
            $blockchain->update([
                'image' => $path2.$fileName2
            ]);
        }

        $blockchain->update([
            'heading' => $request->heading,
            'text' => $request->text,
        ]);
        return back()->with('success', 'Updted Successfully');
    }
}
