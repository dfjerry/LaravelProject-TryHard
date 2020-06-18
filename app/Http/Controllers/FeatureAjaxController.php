<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class FeatureAjaxController extends Controller
{
    public function getSearch(Request $request){
        if ($request->ajax()) {
            $output = '';
            $products = Product::where('product_name', 'like', '%'.$request->search.'%')->
            orwhere('price', $request->search)->get();
            $count = count($products);
            if ($products) {
                foreach ($products as $key => $product) {
                    $output .= '<tr>
                    <td><a href="'. $product->getProductUrl() . '"> ' . $product->product_name . '</a></td>
                    <td><img style="width: 50px; height: 50px;" src="' . $product->getImage() . '" ></td>
                    <td>' . $product->getPrice() . '</td>
                    <td><a href="' . $product->getProductUrl() . '">Show more </a></td>
                    </tr>';
                }
            }
            return Response($output);
        }
    }
}
