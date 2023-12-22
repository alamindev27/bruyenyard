<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    public function index() {
        return view('admin.social-media.index');
    }
    public function update(Request $request) {
        socialMedia()->update([
            'fb_link' => $request->fb_link,
            'msg_link' => $request->msg_link,
            'wa_link' => $request->wa_link,
            'li_link' => $request->li_link,
            'tw_link' => $request->tw_link,
            'in_link' => $request->in_link,
            'github_link' => $request->github_link,
            'tel_link' => $request->tel_link,
        ]);
    }
}
