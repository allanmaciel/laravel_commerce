<?php
/**
 * Created by PhpStorm.
 * User: Allan
 * Date: 23/10/2015
 * Time: 14:58
 */

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Product;
class AdminProductsController extends Controller {

    private $products;

    public function __construct(Product $product)
    {
        $this->middleware('guest');
        $this->products = $product;
    }



    /* public function index()
     {
         return view('welcome');
     }*/
    public function products()
    {
        $products = $this->products->all();
        return view('products', compact('products'));
    }
}