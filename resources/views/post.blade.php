@extends('partials.layout')
@section('title', $post->title)
@section('content')
    <div class="card bg-base-100 shadow-xl">
        @if($post->displayImage)
            <figure>
                <img src="{{$post->displayImage}}" />
            </figure>
        @endif
        <div class="card-body">
            <h2 class="card-title">{{ $post->title }}</h2>
            <p>{!! $post->displayBody !!}</p>
            <div class="card-actions justify-end"></div>
        </div>
    </div>
@endsection
