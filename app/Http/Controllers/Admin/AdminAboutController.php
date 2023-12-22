<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AdminAboutController extends Controller
{
    public function index() {
        $about = About::where('id', 1)->first();
        return view('admin.about.index', compact('about'));
    }

    public function update(Request $request) {
        $request->validate([
            'heading' => 'required | string | max:255',
            'text' => 'required | string | max:255',
            'image' => 'image | mimes:jpg,png,jpeg',
        ]);

        $about = About::where('id', 1)->first();


        if ($request->hasFile('image')) {
            $arr2 = explode('/', $about->image);
            $img2 = end($arr2);
            if ($img2 != 'default-blockchain.png') {
                unlink(base_path($about->image));
            }
            $file2 = $request->file('image');
            $fileName2 = time().'-about-file.'.$file2->getClientOriginalExtension();
            $path2 = 'assets/uploads/about/';

            $request->image->move($path2, $fileName2);
            $about->update([
                'image' => $path2.$fileName2
            ]);
        }

        $about->update([
            'heading' => $request->heading,
            'text' => $request->text,
        ]);
        return back()->with('success', 'Updted Successfully');
    }
}
