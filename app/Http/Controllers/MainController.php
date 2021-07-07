<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class MainController extends Controller
{
    public function viewDetails($product_id = 1)
    {
        $valProduct = $product_id;
        $product_data = Products::where('id', $valProduct)->first();

        return view('detalles-producto')
            ->with('product_id', $valProduct)
            ->with('product_data', $product_data);
    }
}
