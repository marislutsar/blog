@extends('partials.layout')
@section('title', 'Home')
@section('content')
    <h1 class="text-5xl">Home page</h1>
    <div class="my-4 text-center">
        {{ $posts->links() }}
    </div>
    <div class="grid grid-cols-4 gap-4">
        @foreach ($posts as $post)
            {{-- <li>{{ $post->title }}</li> --}}

            <div class="shadow-xl card bg-base-100">
                @if($post->displayImage)
                    <figure>
                        <img src="{{$post->displayImage}}" />
                    </figure>
                @endif
                <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <p>{{ $post->snippet }}</p>
                    <p class="text-neutral-content">{{$post->created_at->diffForHumans()}}</p>
                    <div class="card-actions justify-end">
                        <a class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
