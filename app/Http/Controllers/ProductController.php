<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Inertia\Inertia;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return Inertia::render('Products/Index', [
            'products' => $products
        ]);

        // return response()->json([
        //     'message' => 'รายการสินค้าทั้งหมด',
        //     'data' => $products
        // ], 200);



    }

}
