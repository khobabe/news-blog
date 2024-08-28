@extends('admin.layout')

@section('title')
    Category Insertion
@endsection

@section('content')
    <div class="flex flex-col ">
        <div class="flex justify-between items-center my-5">
            <h2 class="font-bold  capitalize text-xl"><span class="text-orange-600">Inser categories here</h2>
            <a href="{{ route('category.index') }}" class="bg-sky-600 px-3 py-2 rounded text-white font-semibold">Manage Categories</a>
        </div>
        <form action="{{ route('category.store') }}" method="POST" class="px-3 py-2 flex-1 rounded-md border border-orange-600 ">
            @csrf
            <div class="mb-3 gap-2 flex flex-col">
                <label for="parent_id">Main category</label>
                <select class="px-3 py-2 rounded-md" name="parent_id">
                    <option value="">Main category</option>
                    @foreach ($mainCategories as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->cat_title }}</option>
                    @endforeach
                </select>
                @error('parent_id')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3 gap-2 flex flex-col">
                <label for="cat_title">Category name</label>
                <input type="text" class="px-3 py-2 rounded-md" name="cat_title">
                @error('cat_title')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3 gap-2 flex flex-col">
                <label for="cat_description">Category description</label>
                <textarea rows="5" class="px-3 py-2 rounded-md" name="cat_description"></textarea>
                @error('cat_description')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3 gap-2 flex flex-col">
                <input type="submit" class="px-3 py-2 rounded-md bg-orange-500 text-slate-100 cursor-pointer"
                    value="Add">
            </div>
        </form>
    </div>
@endsection
