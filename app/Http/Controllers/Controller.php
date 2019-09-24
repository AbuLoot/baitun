<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Page;
use App\Mode;
use App\Category;
use App\Language;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
    	$languages = Language::orderBy('sort_id')->get();
        $mode = Mode::where('slug', 'trend')->first();
        $pages = Page::where('status', 1)->orderBy('sort_id')->get()->toTree();
        $categories = Category::orderBy('sort_id')->get()->toTree();

        view()->share([
            'mode' => $mode,
            'pages' => $pages,
            'categories' => $categories,
            'languages' => $languages,
        ]);
    }
}
