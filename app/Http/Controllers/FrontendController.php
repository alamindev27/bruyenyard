<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blockchain;
use App\Models\Counter;
use App\Models\Ecosystem;
use App\Models\EcosystemData;
use App\Models\Faq;
use App\Models\FeatureAriea;
use App\Models\Partner;
use App\Models\PartnerData;
use App\Models\PresaleInfo;
use App\Models\PresaleRaise;
use App\Models\PrivacyPolicy;
use App\Models\Roadmap;
use App\Models\RoadmapData;
use App\Models\Team;
use App\Models\TermsAndCondition;
use App\Models\WhitePaper;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() {
        $partners = Partner::all();
        $teams = Team::all();
        $featues = FeatureAriea::all();
        $counters = Counter::all();
        return view('welcome', compact('partners', 'teams', 'featues', 'counters'));
    }

    public function about() {
        $about = About::where('id', 1)->first();
        return view('about', compact('about'));
    }

    public function blockchain() {
        $blockchain = Blockchain::where('id', 1)->first();
        return view('blockchain', compact('blockchain'));
    }

    public function faq() {
        $faqs = Faq::all();
        return view('faq', compact('faqs'));
    }

    public function roadmap() {
        $roadmap = Roadmap::where('id', 1)->first();
        $datas = RoadmapData::all();
        return view('roadmap', compact('roadmap', 'datas'));
    }

    public function presel() {
        $presale = PresaleInfo::where('id', 1)->first();
        $raises = PresaleRaise::all();
        return view('presel', compact('presale', 'raises'));
    }

    public function echosystem() {
        $ecosystem = Ecosystem::where('id', 1)->first();
        $datas = EcosystemData::all();
        return view('echosystem', compact('ecosystem','datas'));
    }

    public function partner() {
        $partners = Partner::all();
        $data = PartnerData::where('id', 1)->first();
        return view('partner', compact('partners', 'data'));
    }


    public function privacyPolicy() {
        $data = PrivacyPolicy::where('id', 1)->first();
        return view('user.privacyPolicy', compact('data'));
    }

    public function termsCondition() {
        $data = TermsAndCondition::where('id', 1)->first();
        return view('user.termsCondition', compact('data'));
    }

    public function whitePaper() {
        $data = WhitePaper::where('id', 1)->first();
        return view('user.whitePaper', compact('data'));
    }
}
