<?php

namespace App\Http\Controllers\assignment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHomePage(Request $request) {
        return view('assignment.home');
    }
    public function showNews(Request $request) {
        return view('assignment.news');
    }
}
