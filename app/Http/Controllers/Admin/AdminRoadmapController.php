<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Roadmap;
use Illuminate\Http\Request;

class AdminRoadmapController extends Controller
{
    public function index() {
        $roadmap = Roadmap::where('id', 1)->first();
        return view('admin.roadmap.index', compact('roadmap'));
    }

    public function update(Request $request) {
        $request->validate([
            'heading' => 'required | string | max:255',
            'text' => 'required | string | max:255',
            'file' => 'mimes:pdf',
            'image' => 'image | mimes:jpg,png,jpeg',
        ]);

        $roadmap = Roadmap::where('id', 1)->first();
        if ($request->hasFile('file')) {
            $arr = explode('/', $roadmap->file);
            $img = end($arr);
            if ($img != 'default.pdf') {
                unlink(base_path($roadmap->file));
            }
            $file = $request->file('file');
            $fileName = time().'-roadmap-file.'.$file->getClientOriginalExtension();
            $path = 'assets/uploads/pdf/';

            $request->file->move($path, $fileName);
            $roadmap->update([
                'file' => $path.$fileName
            ]);
        }

        if ($request->hasFile('image')) {
            $arr2 = explode('/', $roadmap->image);
            $img2 = end($arr2);
            if ($img2 != 'default-blockchain.png') {
                unlink(base_path($roadmap->image));
            }
            $file2 = $request->file('image');
            $fileName2 = time().'-roadmap-file.'.$file2->getClientOriginalExtension();
            $path2 = 'assets/uploads/roadmap/';

            $request->image->move($path2, $fileName2);
            $roadmap->update([
                'image' => $path2.$fileName2
            ]);
        }

        $roadmap->update([
            'heading' => $request->heading,
            'text' => $request->text,
        ]);
        return back()->with('success', 'Updted Successfully');
    }
}
