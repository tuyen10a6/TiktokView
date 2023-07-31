<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index($code)
    {
        // $site = Site::where('code', $code)->first();

        return view('theme_default.home.product_by_cate');
    }

    /**
     * @param $siteCode
     * @param $categorySlug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function getProductByCategory($siteCode, $categorySlug)
    {
        $site = Site::where('code', $siteCode)->first();

        if (empty($site)) {
            pd("Site không tồn tại");
        }

        $category = Category::where("slug", $categorySlug)->first();

        $products = Product::where("site_id", $site->id)
            ->where("category_id", $category->id)
            ->paginate();

        return view('theme_default.product.product_by_cate', compact('category', 'products', 'siteCode'));
    }


    /**
     * @param $siteCode
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function filterProduct($siteCode, Request $request)
    {
        $pageSize = 10;

        $input = $request->all();

        $cacheKey = 'filtered_products_v10' . $siteCode . '_' . serialize($input);

        $products = Cache::remember($cacheKey, 1, function () use ($siteCode, $request, $pageSize, $input) {
            $site = Site::where('code', $siteCode)->first();

            if ($request->has("page_size")) {
                $pageSize = $input["page_size"];
            }

            $query = Product::where("site_id", $site->id);

            if (isset($input["category_id"]) && !empty((int)$input["category_id"])) {
                $query = $query->where("category_id", $input["category_id"]);
            }

            return $query->select([
                "id",
                "name",
                "slug",
                "price",
                "default_img",
                "description"
            ])->paginate($pageSize);
        });

        return $this->sendSuccess([
            "products" => $products
        ]);
    }

}