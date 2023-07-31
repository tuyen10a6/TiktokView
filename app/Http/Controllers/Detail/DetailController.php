<?php

namespace App\Http\Controllers\Detail;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Site;
use App\Models\Product;
use App\Models\ProductVideo;

use Illuminate\Http\Request;


class DetailController extends Controller
{

    public function index($code, $slug)
    {
        $cdn_static_file = config('app.cdn_static_file'); 

        $site = Site::where('code', $code)->first();

        if (empty($site)) {
            pd("site không tồn tại => Account không tồn tại");
        }
         
       $products = Product::all();

        $product = Product::where("slug", $slug)
        ->where("status", Product::PRODUCT_STATUS_IS_ACTIVE)
        ->first();

         if ($product){
          $productImages = $product->productImages()->get();
          
          $productVideo = $product->productVideos()->first();
          
          }
         else{
            abort(404); 
         }

        return view('theme_default.detail.details', compact('product', 'code', 'productImages','cdn_static_file','productVideo'));
    }
    
}