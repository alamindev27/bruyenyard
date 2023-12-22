<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FeatureAriea;
use Illuminate\Http\Request;

class AdminFeatureArieaController extends Controller
{
    public function index() {
        $datas = FeatureAriea::all();
        return view('admin.feature.index', compact('datas'));
    }

    public function edit($id) {
        $data = FeatureAriea::where('id', $id)->first();
        return view('admin.feature.edit', compact('data'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'heading' => 'required | string | max:255',
            'text' => 'required | string | max:255',
            'icon' => 'image | mimes:jpg,png,jpeg'
        ]);

        $data = FeatureAriea::where('id', $id)->first();

        if ($request->hasFile('icon')) {
            $arr = explode('/', $data->icon);
            $oldFile = end($arr);
            if ($oldFile != 'features-icon-3.png') {
                unlink(base_path($data->icon));
            }
            $file = $request->file('icon');
            $fileName = time().'-feature-icon.'.$file->getClientOriginalExtension();
            $path = 'assets/uploads/feature/';
            $request->icon->move($path, $fileName);
            $data->update([
                'icon' => $path.$fileName
            ]);
        }

        $data->update([
            'heading' => $request->heading,
            'text' => $request->text
        ]);
        return back()->with('success', 'Updated Successfully');
    }
}
