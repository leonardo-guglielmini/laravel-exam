<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::with('company')->get();
        return response()->json([
            'succces' => true,
            'results' => $data,
        ]);
    }
}
