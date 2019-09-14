<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;
use App\Product;
use App\Category;

class PageController extends Controller
{
    public function main()
    {
        $products = Product::where('status', 1)->get();

        return view('main', ['products' => $products]);
    }

    public function services($slug)
    {
        $page = Page::where('slug', $slug)->first();

        return view('service-'.$page->id)->with('page', $page);
    }

    public function projects()
    {
        $page = Page::where('slug', 'proekty')->firstOrFail();
        $category = Category::where('slug', $page->slug)->first();

        return view('projects', ['page' => $page, 'category' => $category]);
    }

    public function showProject($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        return view('show-project')->with('product', $product);
    }

    public function page($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();

        return view('page')->with('page', $page);
    }

    public function contacts()
    {
        $page = Page::where('slug', 'kontakty')->firstOrFail();

        return view('contacts')->with('page', $page);
    }
}
