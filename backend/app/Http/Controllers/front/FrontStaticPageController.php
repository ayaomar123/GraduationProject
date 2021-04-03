<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\StaticPage;

class FrontStaticPageController extends Controller
{
    public function index()
    {
        $Pages = StaticPage::where('active', 1)
            ->first();

        return view('front.pages.staticPage', compact('Pages'));
    }

    public function calls()
    {
        $calls = StaticPage::where('active', 1)
            ->latest();

        return view('front.pages.staticPagecalls', compact('calls'));
    }

}
