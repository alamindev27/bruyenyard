<?php

use App\Models\Setting;
use App\Models\SocialMedia;

if (!function_exists('setting')) {
    function setting()
    {
        $setting = Setting::where('id', 1)->first();
        if ($setting) {
            return $setting;
        }else{
            return false;
        }
    }
}

if (!function_exists('socialMedia')) {
    function socialMedia()
    {
        $socialMedia = SocialMedia::where('id', 1)->first();
        if ($socialMedia) {
            return $socialMedia;
        }else{
            return false;
        }
    }
}
