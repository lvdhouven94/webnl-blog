<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::published()->paginate(9);

        return view('blog.index', [
            'blogs' => $blogs,
        ]);
    }

    /**
     * Display the specified blog
     *
     * @param int $id
     * @param string $slug
     */
    public function show(int $id, string $slug)
    {
        $blog = Blog::where('id', $id)->where('slug', $slug)->first();
        $comments = $blog->comments()->orderBy('created_at', 'desc')->get();

        return view('blog.show', [
            'blog' => $blog,
            'comments' => $comments,
        ]);
    }
}
