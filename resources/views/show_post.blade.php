@extends('layouts.main-layout')

@section('header')
    <h1 class="text-4xl font-bold text-center">
        {{ $title }}
    </h1>
@endsection

@section('content')
<div class="mt-4 text-center">
    <a href="{{ route('posts.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
        Back
    </a>
</div>

@if($post && $post !== null)
    <div class="mt-4 max-w-2xl mx-auto">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold mb-4">Title: {{ $post->title }}</h2>
            <h3 class="text-lg font-semibold mb-2">Author: {{ $post->author }}</h3>
            <p class="text-gray-700">Description: {{ $post->description }}</p>
        </div>
    </div>
@else
    <div class="mt-4 max-w-2xl mx-auto text-center text-gray-500">
        No posts available.
    </div>
@endif
@endsection
