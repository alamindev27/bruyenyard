<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    public function index() {
        return view('admin.profile.index');
    }

    public function update(Request $request) {
        $request->validate([
            'name' => 'required | string | max:255',
            'avatar.*' => 'image | mimes:jpg,png,jpeg'
        ]);
        $user = User::where('id', auth()->user()->id)->first();
        if ($request->hasFile('avatar')) {
            $arr = explode('/', auth()->user()->avatar);
            $img = end($arr);
            if ($img != 'avatar.png') {
                unlink(base_path(auth()->user()->avatar));
            }
            $file = $request->file('avatar');
            $fileName = time().'-profile-image.'.$file->getClientOriginalExtension();
            $path = 'assets/uploads/avatar/';
            $request->avatar->move($path, $fileName);
            $user->update([
                'avatar' => $path.$fileName
            ]);
        }
        $user->update([
            'name' => $request->name,
        ]);
        return back()->with('success', 'Updated Successfully');
    }

    public function security () {
        return view('admin.profile.security');
    }

    public function securityUpdate(Request $request){
        $request->validate([
            'current_password' => 'required',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $user = User::where('id', auth()->user()->id)->first();
        if (Hash::check($request->current_password, $user->password)) {
            User::where('id', auth()->id())->update([
                'password' => Hash::make($request->password)
            ]);
            return back()->with('success', 'Updated Successfully');
        }else{
            return back()->with('notMatch', 'Current password not match');
        }
    }

    public function upateEmail(Request $request) {
        $request->validate([
            'email' => 'required | email | string | max:255 | unique:users'
        ]);
        User::where('id', auth()->user()->id)->update([
            'email' => $request->email
        ]);
        return back()->with('success', 'Updated Successfully');
    }
}
