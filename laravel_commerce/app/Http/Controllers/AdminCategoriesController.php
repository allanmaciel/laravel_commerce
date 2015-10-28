<?php
/**
 * Created by PhpStorm.
 * User: Allan
 * Date: 23/10/2015
 * Time: 14:03
 */

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;

class AdminCategoriesController extends Controller {

    private $categories;

    public function __construct(Category $category)
    {
        $this->middleware('guest');
        $this->categories = $category;
    }



   /* public function index()
    {
        return view('welcome');
    }*/
    public function categories()
    {
        $categories = $this->categories->all();
        return view('categories', compact('categories'));
    }
}