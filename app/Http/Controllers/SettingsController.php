<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
	public function header()
    {
        return view('admin.header');
    }
	public function menu()
    {
        return view('admin.menu');
    }
	public function footer()
    {
        return view('admin.footer');
    }
	public function fonts()
    {
        return view('admin.fonts');
    }
	public function colors()
    {
        return view('admin.colors');
    }
}
