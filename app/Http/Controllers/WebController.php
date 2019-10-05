<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;

class WebController extends Controller
{
    public function index()
    {
        $stocks= Stock::all();
        $stocks=Stock::orderby('id','DESC')->paginate(6);
        return view('OnlineShop.index',compact('stocks'));
    }
    public function cart()
    {
        return view('OnlineShop.cart');
    }
    public function contact()
    {
        return view('OnlineShop.contact');
    }
    public function shop()
    {

        $stocks= Stock::all();
        return view('OnlineShop.shop',compact('stocks'));

    }
}
