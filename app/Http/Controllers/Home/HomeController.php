<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Site;
use App\Models\TopProduct;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * @param $code
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index($code)
    {
        $siteData = Cache::remember('get_site_data_by_site_code_' . $code . '_v7', 300, function () use ($code) {
            $site = Site::where('code', $code)->first();

            if (empty($site)) {
                return [];
            }

            $topProducts = TopProduct::where("site_id", $site->id)
                ->with("product")
                ->get();

            $categories = Category::where("site_id", $site->id)
                ->orderBy("position", "ASC")
                ->take(3)
                ->get();

            $products = Product::where("site_id", $site->id)->take(10)->get();

            return [
                "site" => $site,
                "categories" => $categories,
                "products" => $products,
                "topProducts" => $topProducts
            ];
        });

        return view('theme_default.home.index', $siteData);
    }
}
