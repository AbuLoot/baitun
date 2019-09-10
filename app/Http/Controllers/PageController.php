<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;
use App\Product;

class PageController extends Controller
{
    public function main()
    {
        $products = Product::where('status', 1)->get();

        return view('main');
    }

    public function page($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();

        return view('page')->with('page', $page);
    }

    public function contacts()
    {
        return view('pages.contacts');
        // $page = Page::where('slug', 'kontakty')->firstOrFail();

        // return view('pages.contacts')->with('page', $page);
    }
}
