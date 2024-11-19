@extends('partials.layout')
@section('title', 'Home page')
@section('content')
    <div class="container mx-auto">
        <div class="card bg-base-300 shadow-xl">
            <figure>
                <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" alt="Shoes" />
            </figure>
            <div class="card-body">
                <h2 class="card-title">{{ $post->title }}</h2>
                <p>{!! nl2br($post->body) !!}</p>
                <p class="text-neutral-content">{{ $post->created_at->diffForHumans() }}</p>
                <div class="card-actions justify-end">

                </div>
            </div>
        </div>
    </div>
@endsection
