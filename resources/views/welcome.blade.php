@extends('layouts.main-layout')

@section('header')
<h1 class="text-4xl font-bold text-center">
    Welcome to {{ $title }} Page
</h1>
@endsection

@section('content')
<div class="text-center">
    <a href="{{ route('posts.index') }}" class="mt-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">View Posts</a>
</div>
@endsection

@section('footer')
<footer class="mt-4 text-center text-gray-500 text-sm">
    &copy; {{ date('Y') }} Laravel CRUD. All rights reserved.
</footer>
@endsection

