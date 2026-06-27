<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Page;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $year = request('year', now()->year);

    $posts = Post::selectRaw('MONTH(created_at) as month, COUNT(*) as total')
        ->whereYear('created_at', $year)
        ->groupBy(DB::raw('MONTH(created_at)'))
        ->pluck('total', 'month');

    $pages = Page::selectRaw('MONTH(created_at) as month, COUNT(*) as total')
        ->whereYear('created_at', $year)
        ->groupBy(DB::raw('MONTH(created_at)'))
        ->pluck('total', 'month');

    $chartData = [];

    for ($i = 1; $i <= 12; $i++) {
        $chartData[] = [
            'month' => date('M', mktime(0, 0, 0, $i, 1)),
            'posts' => $posts[$i] ?? 0,
            'pages' => $pages[$i] ?? 0,
        ];
    }

    return view('dashboard', [
        'totalPosts'  => Post::count(),
        'totalPages'  => Page::count(),
        'totalEditor' => User::where('role', 'editor')->count(),
        'latestPosts' => Post::latest()->take(5)->get(),
        'chartData'   => $chartData,
        'maxValue'    => max(
            max(array_column($chartData, 'posts')),
            max(array_column($chartData, 'pages')),
            1
        ),
        'year' => $year,
    ]);
    }
}