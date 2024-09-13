@extends('admin.layout')

@section('title')
    Admin Panel
@endsection

@section('content')
    <div class="flex flex-1 p-5 flex-col">
        <div class="grid grid-cols-3 gap-5">
            <div class="flex flex-col items-center justify-center bg-slate-100 px-3 py-2 rounded-xl">
                <dt class="mb-2 text-3xl font-extrabold">73M+</dt>
                <dd class="text-green-500 font-semibold dark:text-gray-400">Total Users</dd>
            </div>
            <div class="flex flex-col items-center justify-center bg-slate-100 px-3 py-2 rounded-xl">
                <dt class="mb-2 text-3xl font-extrabold">109M+</dt>
                <dd class="text-red-500 font-semibold dark:text-gray-400">Total Posts</dd>
            </div>
            <div class="flex flex-col items-center justify-center bg-slate-100 px-3 py-2 rounded-xl">
                <dt class="mb-2 text-3xl font-extrabold">7+</dt>
                <dd class="text-yellow-500 font-semibold dark:text-gray-400">Total Categories</dd>
            </div>
        </div>

        {{-- testing livewire --}}
        <div class="mt-10">
            <h1 class="bg-yellow-500 text-slate-100 px-3 py-2">this is an example of livewire method</h1>
            <livewire:example-component/>
        </div>

    </div>
@endsection
