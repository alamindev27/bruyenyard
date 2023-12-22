<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PrivacyPolicy;
use App\Models\TermsAndCondition;
use App\Models\WhitePaper;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function privacyPolicy() {
        $data = PrivacyPolicy::where('id', 1)->first();
        return view('admin.page.privacy-policy', compact('data'));
    }

    public function privacyPolicyUpdate(Request $request) {
        $request->validate([
            'heading' => 'required | string | max:255',
            'content' => 'required | string'
        ]);
        $data = PrivacyPolicy::where('id', 1)->first();
        $data->update([
            'heading' => $request->heading,
            'content' => $request->content
        ]);
        return back()->with('success', 'Updated Successfully');
    }

    public function termsCondition() {
        $data = TermsAndCondition::where('id', 1)->first();
        return view('admin.page.terms-condition', compact('data'));
    }



    public function termsConditionUpdate(Request $request) {
        $request->validate([
            'heading' => 'required | string | max:255',
            'content' => 'required | string'
        ]);
        $data = TermsAndCondition::where('id', 1)->first();
        $data->update([
            'heading' => $request->heading,
            'content' => $request->content
        ]);
        return back()->with('success', 'Updated Successfully');
    }

    public function whitePaper() {
        $data = WhitePaper::where('id', 1)->first();
        return view('admin.page.white-paper', compact('data'));
    }



    public function whitePaperUpdate(Request $request) {
        $request->validate([
            'heading' => 'required | string | max:255',
            'content' => 'required | string'
        ]);
        $data = WhitePaper::where('id', 1)->first();
        $data->update([
            'heading' => $request->heading,
            'content' => $request->content
        ]);
        return back()->with('success', 'Updated Successfully');
    }
}
