<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentRequest;
use App\Models\Blog;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage
     *
     * @param CreateCommentRequest $request
     * @param Blog $blog
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateCommentRequest $request, Blog $blog)
    {
        $blog->comments()->create($request->validated());

        return back()->with('success', 'Comment has been successfully created!');
    }
}
