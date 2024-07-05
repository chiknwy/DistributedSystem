<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $title = "Landing Page";
        $packages = [(object)[
            'package_code' => 'dummy code',
            'package_name' => 'dummy name',
            'package_price' => 'dummy price',
        ], (object)[
            'package_code' => 'dummy code 1',
            'package_name' => 'dummy name 1',
            'package_price' => 'dummy price 1',
        ], (object)[
            'package_code' => 'dummy code 2',
            'package_name' => 'dummy name 2',
            'package_price' => 'dummy price 2',
        ]];

        $books = Book::take(6)->get(); // Assuming you want to display 4 featured books

        return view('frontpage.landing', compact('title', 'packages', 'books'));
    }
}
