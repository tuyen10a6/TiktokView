<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Site;

class HomeController extends BaseController
{
    /**
     * @param $code
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index($code)
    {
        $site = Site::where('code', $code)->firstOrFail();

        $categories = $site->categories;

        return view('theme_default/home/index', compact('site', 'categories', 'code'));
    }
}