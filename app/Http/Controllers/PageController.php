<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;
use App\Mode;
use App\Product;
use App\Category;

class PageController extends Controller
{
    public function main()
    {
        $page = Page::where('slug', 'glavnaya')->first();
        $page_services = Page::where('parent_id', 2)->get();
        $mode = Mode::where('slug', 'trend')->first();
        $products = Product::where('status', 1)->get();

        return view('main', ['page' => $page, 'page_services' => $page_services, 'mode' => $mode, 'products' => $products]);
    }

    public function services($slug)
    {
        $page = Page::where('slug', $slug)->first();
        $page_services = Page::where('parent_id', 2)->whereNotIn('id', [$page->id])->get();

        return view('service-'.$page->id, ['page' => $page, 'page_services' => $page_services]);
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
