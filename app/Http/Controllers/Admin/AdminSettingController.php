<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminSettingController extends Controller
{
    public function index() {
        return view('admin.setting.index');
    }

    public function update(Request $request) {
        $request->validate([
            'author_name' => 'required | string | max:255',
            'site_name' => 'required | string | max:255',
            'site_logo' => 'image | mimes:jpg,png,jpeg',
            'site_favicon' => 'image | mimes:jpg,png,jpeg',
            'wallet_address' => 'required | string | max:255',
            'wallet_pk' => 'required | string | max:255',
        ]);
        if ($request->hasFile('site_logo')) {
            $arrLogo = explode('/', setting()->site_logo);
            $logo = end($arrLogo);
            if ($logo != 'default-logo.png') {
                unlink(base_path(setting()->site_logo));
            }

            $fileLogo = $request->file('site_logo');
            $fileNameLogo = time().'-logo.'.$fileLogo->getClientOriginalExtension();
            $path = 'assets/uploads/logo/';
            $request->site_logo->move($path, $fileNameLogo);

            setting()->update([
                'site_logo' => $path.$fileNameLogo,
            ]);
        }

        if ($request->hasFile('site_favicon')) {
            $arrFavicon = explode('/', setting()->site_favicon);
            $favicon = end($arrFavicon);
            if ($favicon != 'default-favicon.png') {
                unlink(base_path(setting()->site_favicon));
            }
            $fileLogo = $request->file('site_favicon');
            $fileNameFavicon = time().'-site_favicon.'.$fileLogo->getClientOriginalExtension();
            $path = 'assets/uploads/logo/';
            $request->site_favicon->move($path, $fileNameFavicon);

            setting()->update([
                'site_favicon' => $path.$fileNameFavicon,
            ]);
        }

        setting()->update([
            'author_name' => $request->author_name,
            'site_name' => $request->site_name,
            'wallet_address' => $request->wallet_address,
            'wallet_pk' => $request->wallet_pk,
        ]);

        return back()->with('success', 'Updated Successfully');
    }

    public function buyPrice() {
        return  view('admin.setting.buy');
    }

    public function buyCoinUpdate(Request $request){
        $request->validate([
            'coin_buy_rate' => 'required'
        ]);
        setting()->update([
            'coin_buy_rate' => $request->coin_buy_rate
        ]);
        return back()->with('success', 'Updated Successfully');
    }
}
