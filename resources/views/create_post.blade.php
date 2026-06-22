@extends('layouts.main-layout')

@section('header')
<h1 class="my-8 text-4xl font-bold text-center">
    {{ $title }} Form
</h1>
@endsection

@section('content')
<form action="{{ route('posts.store') }}" method="POST" class="mt-4 max-w-sm mx-auto">
    @if (session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-md text-center font-semibold">
            {{ session('success') }}
        </div>
    @endif
    @csrf
    <div class="mb-4">
        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}" autocomplete="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        @error('title')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-4">
        <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
        <input type="text" name="author" id="author" value="{{ old('author') }}" autocomplete="author" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        @error('author')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-4">
        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
        <textarea name="description" id="description" autocomplete="description" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ old('description') }}</textarea>
        @error('description')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>

    <button type="submit" class="mt-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Submit</button>
    <a href="{{ route('posts.index') }}" class="mt-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Back</a>
</form>
@endsection

@section('footer')
    <footer class="mt-4 text-center text-gray-500 text-sm">
        &copy; {{ date('Y') }} Laravel CRUD. All rights reserved.
    </footer>
@endsection

