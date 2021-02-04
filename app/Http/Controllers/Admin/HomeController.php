<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	$products_count = Products::all()->count();
    	return view('admin.home.index',[
    		'products_count' => $products_count,
	    ]);
    }
}
