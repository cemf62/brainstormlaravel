<?php

namespace App\Http\Controllers;


use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $blogs = Blog::all();





        return view('blogs.index', compact('blogs', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $blog = new Blog;
        $blog->title = $validatedData['title'];
        $blog->content = $validatedData['content'];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('public/blogs/images');
            $blog->image = str_replace('public/', '', $imagePath);
        }


        $blog->save();

        return redirect()->route('blogs.index')->with('success', 'Blog post created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blogs = Blog::findOrFail($id);

        return view('blogs.show', compact('blogs'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);


        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog post deleted successfully.');
    }

}
