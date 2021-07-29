@extends('layout')

@section('content')
    <div class="blog">
        <div class="row">
            @foreach($blogs as $blog)
                <div class="col-12 col-md-6 col-lg-4 mt-4">
                    <div class="item">
                        <div class="image-wrapper">
                            <div class="image" style="background-image: url('{{ asset('images/blogs/' . $blog->image) }}')"></div>
                        </div>
                        <div class="info-wrapper">
                            <h3 class="title">{{ $blog->title }}</h3>
                            <span class="author">{{ $blog->author }}</span>
                            <span class="published-at">{{ $blog->published_at->format('d-m-Y') }}</span>
                            <p class="short-description">{{ Illuminate\Support\Str::limit($blog->content, 50) }}</p>
                            <a href="{{ route('blog.show', ['id' => $blog->id, 'slug' => $blog->slug]) }}"
                               class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12">
                <div class="navigation">
                    {!! $blogs->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
