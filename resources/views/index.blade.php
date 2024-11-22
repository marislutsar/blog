@extends('partials.layout')
@section('title', 'Home')
@section('content')
    <h1 class="text-5xl">Home page</h1>
    <div class="grid grid-cols-4 gap-4">
        @foreach ($posts as $post)
            {{-- <li>{{ $post->title }}</li> --}}

            <div class="card bg-base-100 shadow-xl">
                <figure>
                    <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" alt="Shoes" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">{{ post->title }}</h2>
                    <p>{{ post->snippet }}</p>
                    <div class="card-actions justify-end">
                        <a class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
