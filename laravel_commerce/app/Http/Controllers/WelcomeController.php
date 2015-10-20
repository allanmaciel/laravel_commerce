<?php
/**
 * Created by PhpStorm.
 * User: Allan
 * Date: 20/10/2015
 * Time: 17:31
 */

namespace CodeCommerce\Http\Controllers;


class WelcomeController extends Controller {

    public function __construct()
    {
        $this->middleware('guest');
    }
    public function index()
    {
        return view('welcome');
    }
    public function exemplo()
    {
        $nome = "Allan";
        $sobrenome = "Maciel";
        return view('exemplo', compact('nome', 'sobrenome'));
    }
}