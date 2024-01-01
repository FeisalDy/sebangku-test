<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class HomeController extends Controller
{
    public function index()
    {
        $latestProducts = Product::latest()->take(5)->get();
        $activeProducts = Product::where('status', 'available')->paginate(8);
        return View::make('pages/home/home', compact('activeProducts', 'latestProducts'));
    }
}
