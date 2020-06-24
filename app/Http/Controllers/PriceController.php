<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index()
    {
        $prices = array(
            array(
                'name' => 'Bayi',
                'price' => 'Rp 19.900',
                'discounted' => 'Rp 15.900',
                'users' => '938'
            ),
            array(
                'name' => 'Pelajar',
                'price' => 'Rp 46.900',
                'discounted' => 'Rp 23.450',
                'users' => '4.168'
            ),
            array(
                'name' => 'Personal',
                'price' => 'Rp 58.900',
                'discounted' => 'Rp 38.900',
                'users' => '10.017'
            ),
            array(
                'name' => 'Pelajar',
                'price' => 'Rp 109.900',
                'discounted' => 'Rp 65.900',
                'users' => '3.552'
            )
        );

        return response()->json($prices,200);
    }
}
