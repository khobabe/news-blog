@extends('admin.layout')

@section('title')
    Manage Category
@endsection

@section('content')
    <div class="flex justify-between items-center my-5">
        <h2 class="font-bold  capitalize text-xl"><span class="text-orange-600">manage categories&nbsp;</span><span
                class="text-sky-500">(<span class="text-slate-700">45</span>)</span></h2>
        <a href="{{ route('category.create') }}" class="bg-sky-600 px-3 py-2 rounded text-white font-semibold">Insert Categories</a>
    </div>
    <table class="border border-orange-600 rounded-md">
        <thead>
            <tr>
                <th class="border border-orange-600 p-3 text-center">Id</th>
                <th class="border border-orange-600 p-3 text-center">Category name</th>
                <th class="border border-orange-600 p-3 text-center">Category slug</th>
                <th class="border border-orange-600 p-3 text-center">Category description</th>
                <th class="border border-orange-600 p-3 text-center">Parent Category</th>
                <th class="border border-orange-600 p-3 text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr class="border border-orange-600">
                    <td class="border border-orange-600 p-3 text-center">{{ $category->id }}</td>
                    <td class="border border-orange-600 p-3 text-center">{{ $category->cat_title }}</td>
                    <td class="border border-orange-600 p-3 text-center">{{ $category->cat_slug }}</td>
                    <td class="border border-orange-600 p-3 text-center">{{ $category->cat_description }}</td>
                    <td class="border border-orange-600 p-3 text-center">
                        @if ($category->parent==null)
                            {{ 'Parent Category' }}
                        @else
                            {{ $category->parent->cat_title }}
                        @endif
                    </td>
                    <td class=" p-3 flex items-center justify-center gap-2">
                        <a href="" class="bg-sky-500 text-white px-3 py-2 rounded text-lg">edit</a>
                        <a href="" class="bg-red-500 text-white px-3 py-2 rounded text-lg">X</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
