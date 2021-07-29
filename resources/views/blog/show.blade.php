@extends('layout')

@section('content')
    <article class="blog-detail" itemscope itemprop="http://schema.org/BlogPosting">
        <div class="row">
            <div class="col-12">
                <a class="btn btn-primary go-back" href="{{ route('blog.index') }}"> Go back to overview</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <header>
                    <h1 class="title">{{ $blog->title }}</h1>
                    <span class="author">Written by: {{ $blog->author }}</span>
                    <span class="published-at">Published at: {{ $blog->published_at->format('d-m-Y') }}</span>
                </header>
                <p class="content">{{ $blog->content }}</p>
            </div>
        </div>
    </article>
    <div class="comment-form">
        <div class="row">
            <div class="col-12">
                <h2>Leave a comment now!</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @foreach($errors->all() as $error)
                    <p class="form-error-message">{{ $error }} </p>
                @endforeach
            </div>
            <div class="col-12">
                <form action="{{ route('blog.comment.store', $blog) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="userName" class="form-label">User name</label>
                        <input type="text" class="form-control" name="user_name" id="userName" placeholder="John Doe">
                    </div>

                    <div class="mb-3">
                        <label for="comment" class="form-label">Comment</label>
                        <textarea name="comment" id="comment" class="form-control" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="comments">
        <div class="row">
            @foreach($comments as $comment)
                <div class="col-12">
                    <div class="item">
                        <p class="comment">{{ $comment->comment }}</p>
                        <h4 class="name">- {{ $comment->user_name }}</h4>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
