<?php

namespace App\Http\Controllers\Joystick;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
    	return view('joystick-admin.index');
    }

    public function filemanager()
    {
    	return view('joystick-admin.filemanager');
    }
}
