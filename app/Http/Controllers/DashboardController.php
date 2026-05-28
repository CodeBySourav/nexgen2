<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Page;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'totalPosts' => Post::count(),
            'totalPages' => Page::count(),
            'latestPosts' => Post::latest()->take(5)->get(),
        ]);
    }
}