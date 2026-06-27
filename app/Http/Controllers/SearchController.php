<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Page;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $q = trim($request->q);

        if (!$q) {
            return response()->json([]);
        }

        $results = [];

        // Posts
        foreach (
            Post::where('title', 'like', "%{$q}%")
                ->limit(5)
                ->get() as $post
        ) {
            $results[] = [
                'type' => 'Blog',
                'title' => $post->title,
                'url' => route('posts.edit', $post->id),
            ];
        }

        // Pages
        foreach (
            Page::where('title', 'like', "%{$q}%")
                ->limit(5)
                ->get() as $page
        ) {
            $results[] = [
                'type' => 'Page',
                'title' => $page->title,
                'url' => route('pages.edit', $page->id),
            ];
        }

        // Users
        foreach (
            User::where('name', 'like', "%{$q}%")
                ->orWhere('email', 'like', "%{$q}%")
                ->limit(5)
                ->get() as $user
        ) {
            $results[] = [
                'type' => 'User',
                'title' => $user->name,
                'subtitle' => $user->email,
                'url' => route('users.edit', $user->id),
            ];
        }

        return response()->json($results);
    }
}