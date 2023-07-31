<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Site;

class CategoryController extends Controller
{
    /**
     * @param $code
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index($code)
    {
        $cdn_static_file = config('app.cdn_static_file');

        $site = Site::where('code', $code)->first();
        
        if(empty($site))
        {
            pd("Site không tồn tại");
        }

        $categories = Category::where("site_id", $site->id)
            ->where("status", Category::CATEGORY_STATUS_IS_ACTIVE)
            ->get();

        return view('theme_default.category.category', compact('categories', 'code', 'site', 'cdn_static_file'));
    }
}