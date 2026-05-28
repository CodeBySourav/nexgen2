<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::latest()->get();
        return view('admin.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.pages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable',
            'slug' => 'nullable|unique:pages,slug',
            'is_active' => 'nullable'
        ]);

        Page::create([
            'title'   => $request->title,
            'content' => $request->content,
            'slug'    => $request->slug ? Str::slug($request->slug) : Str::slug($request->title),
            'status'  => $request->is_active ? 1 : 0,
        ]);

        return redirect()->route('pages.index')
            ->with('success', 'Page created successfully.');
    }

    public function edit(string $id)
    {
        $page = Page::findOrFail($id);
        return view('admin.pages.edit', compact('page'));
    }

    public function update(Request $request, string $id)
    {
        $page = Page::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable',
            'slug' => 'nullable|unique:pages,slug,' . $id,
            'is_active' => 'nullable'
        ]);

        $page->update([
            'title'   => $request->title,
            'content' => $request->content,
            'slug'    => $request->slug ? Str::slug($request->slug) : Str::slug($request->title),
            'status'  => $request->is_active ? 1 : 0,
        ]);

        return redirect()->route('pages.index')
            ->with('success', 'Page updated successfully.');
    }

    public function destroy(string $id)
    {
        $page = Page::findOrFail($id);
        $page->delete();

        return redirect()->route('pages.index')
            ->with('success', 'Page deleted successfully.');
    }
}