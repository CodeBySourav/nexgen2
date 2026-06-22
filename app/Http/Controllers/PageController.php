<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;


class PageController extends Controller
{

public function uploadImage(Request $request)
{
    if ($request->hasFile('file')) {

        $image = $request->file('file');

        $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

        $image->move(public_path('uploads/blogs'), $filename);

        return response()->json([
            'location' => asset('uploads/blogs/' . $filename)
        ]);
    }

    return response()->json([
        'error' => 'Image upload failed'
    ], 400);
}
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
            'title'            => 'required|string|max:255',
            'content'          => 'nullable',
            'slug'             => 'nullable|unique:pages,slug',
            'seo_title'        => 'nullable|string|max:255',
            'seo_description'  => 'nullable|string',
            'schema_markup'    => 'nullable|string',
            'status'           => 'nullable'
        ]);

        Page::create([
            'title'            => $request->title,
            'content'          => $request->content,
            'slug'             => $request->slug
                                    ? Str::slug($request->slug)
                                    : Str::slug($request->title),

            'seo_title'        => $request->seo_title,
            'seo_description'  => $request->seo_description,
            'schema_markup'    => $request->schema_markup,

            'status'           => $request->status ? 1 : 0,
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
            'title'            => 'required|string|max:255',
            'content'          => 'nullable',
            'slug'             => 'nullable|unique:pages,slug,' . $id,
            'seo_title'        => 'nullable|string|max:255',
            'seo_description'  => 'nullable|string',
            'schema_markup'    => 'nullable|string',
            'status'           => 'nullable'
        ]);

        $page->update([
            'title'            => $request->title,
            'content'          => $request->content,
            'slug'             => $request->slug
                                    ? Str::slug($request->slug)
                                    : Str::slug($request->title),

            'seo_title'        => $request->seo_title,
            'seo_description'  => $request->seo_description,
            'schema_markup'    => $request->schema_markup,

            'status'           => $request->status ? 1 : 0,
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

    public function show($slug) 
    { 

        $page = Page::where('slug', $slug) ->where('status', 1) ->firstOrFail(); 
        
        return view('admin.pages.show', compact('page')); 
        
    }
}