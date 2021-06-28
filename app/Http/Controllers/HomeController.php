<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Product;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::take(30)->simplePaginate(6);
        $categories = Category::whereNull('parent_id')->get();

  $featuredproducts = Product::where('id','LIKE','2')->get();
 $hemps= DB::table('products')
        ->join('product_categories', function ($join) {
            $join->on('products.id', '=', 'product_categories.product_id')
             ->select('products.name as name', 'products.id as id','products.selling_price as price','products.image as image')
                 ->where('product_categories.category_id', '=', 1);
        })
        ->get();
        $foldings= DB::table('products')
        ->join('product_categories', function ($join) {
            $join->on('products.id', '=', 'product_categories.product_id')
             ->select('products.name as name', 'products.id as id','products.selling_price as price','products.image as image')
                 ->where('product_categories.category_id', '=', 2);
        })
        ->get();
 $culturals= DB::table('products')
        ->join('product_categories', function ($join) {
            $join->on('products.id', '=', 'product_categories.product_id')
             ->select('products.name as name', 'products.id as id','products.selling_price as price','products.image as image')
                 ->where('product_categories.category_id', '=', 3);
        })
        ->get();       

 $cosmetics= DB::table('products')
        ->join('product_categories', function ($join) {
            $join->on('products.id', '=', 'product_categories.product_id')
             ->select('products.name as name', 'products.id as id','products.selling_price as price','products.image as image')
                 ->where('product_categories.category_id', '=', 4);
        })
        ->get();       

       


        return view('welcome', ['products' => $products,'categories'=>$categories,'feature'=>$featuredproducts,'hemps'=>$hemps,'foldings'=>$foldings,'culturals'=>$culturals,'cosmetics'=>$cosmetics]);
      
    }

    
}
