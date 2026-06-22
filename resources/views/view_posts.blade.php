@extends('layouts.main-layout')

@section('header')
<h1 class="text-4xl font-bold text-center">
    Welcome to {{ $title }} Page
</h1>
@endsection

@section('content')
<div class="text-center">
    <a href="{{ route('posts.create') }}" class="mt-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Create Post</a>
    <a href="{{ route('home') }}" class="mt-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Home</a>
</div>

@forelse($posts as $post)
    <div class="card max-w-lg mx-auto text-center bg-white border border-gray-300 mt-4 rounded-lg">
        <div class="card-body p-6">
            <h2 class="card-title text-xl font-semibold">{{ $post->title }}</h2>
            <h3 class="card-subtitle text-gray-500">{{ $post->author }}</h3>
            <a href="{{ route('posts.show', $post->id) }}" class="mt-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Show Post</a>
            <a href="{{ route('posts.edit', $post->id) }}" class="mt-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Edit Post</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="mt-4 inline-flex items-center p-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                @csrf
                @method('DELETE')
                <button type="submit" class="inline-flex items-center p2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">Delete Post</button>
            </form>
        </div>
    </div>
@empty
    <p class="text-center">No posts found.</p>
@endforelse
@endsection

@section('footer')
<footer class="mt-4 text-center text-gray-500 text-sm">
    &copy; {{ date('Y') }} Laravel CRUD. All rights reserved.
</footer>
@endsection

