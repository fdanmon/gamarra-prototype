<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('web.home.index');
    }

    public function category()
    {
        return view('web.home.category');
    }

    public function product()
    {
        return view('web.home.product');
    }

    public function cartView()
    {
        return view('web.home.cart');
    }
}
