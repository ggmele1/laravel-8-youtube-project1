<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $title = "Welcome to laravel 8";
        $desc = "This is the description";

        $data = [
            'prodOne' => 'iPhone',
            'prodTwo' => 'android'
        ];

        // Compact Method
        // return view('products.index', compact('title', 'desc'));

        // With Method
        return view('products.index')->with('data', $data);
    }

    public function about() {
        return 'about us page';
    }

    public function show($name) {
        $data = [
            'iphone' => 'iPhone',
            'android' => 'android'
        ];
        
        return view('products.index', [
            'bobs' => $data[$name] ?? 'Products ' . $name . ' does not exist'
        ]);
    }
}