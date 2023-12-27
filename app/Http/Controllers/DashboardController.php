<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\DataFeed;
use Carbon\Carbon;
use App\Models\Product;

class DashboardController extends Controller
{

    /**
     * Displays the dashboard screen
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $dataFeed = new DataFeed();
        $products = Product::all();
        $activeProductsCount = Product::where('status', 'available')->count();
        $inactiveProductsCount = Product::where('status', 'unavailable')->count();

        $productCounts = (object) [
            'active' => $activeProductsCount,
            'inactive' => $inactiveProductsCount,
        ];



        return view('pages/dashboard/dashboard', compact('dataFeed', 'products', 'productCounts'));
        // return $productCounts;
    }
}
