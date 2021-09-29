<?php

namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produto;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     private $product;

     public function __construct(Produto $product)
     {
         $this->product=$product;
     }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = $this->product->limit(9)->orderBy('id','ASC')->get();     
        return view('site.home',compact('products'));
    }

    public function single($slug){
       $product = $this->product->whereSlug($slug)->first();
       return view('site.single',compact('product'));
    }
}
