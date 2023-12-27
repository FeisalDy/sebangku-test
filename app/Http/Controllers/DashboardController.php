<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\DataFeed;
use Carbon\Carbon;
use App\Models\Product;
use App\Models\User;

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
        $products = Product::latest()->paginate(10);
        $activeProductsCount = Product::where('status', 'available')->count();
        $inactiveProductsCount = Product::where('status', 'unavailable')->count();

        $productCounts = (object) [
            'active' => $activeProductsCount,
            'inactive' => $inactiveProductsCount,
        ];

        $users = User::all();
        $activeUsersCount = User::where('active', true)->count();
        $inactiveUsersCount = User::where('active', false)->count();

        $userCounts = (object) [
            'active' => $activeUsersCount,
            'inactive' => $inactiveUsersCount,
        ];


        return view('pages/dashboard/dashboard', compact('dataFeed', 'products', 'productCounts', 'userCounts'));
        // return $productCounts;
    }
}
