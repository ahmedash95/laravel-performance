@extends('page',['name' => $name])
@section('actions')
    <a href="#" class="bg-blue-500 p-3 rounded shadow-md font-bold text-blue-100">New Category</a>
@endsection
@section('page-content')
<div class="bg-white w-5/6 mx-auto shadow-2xl rounded-lg">
    <table class="table-auto w-full">
        <thead>
        <tr>
            <th class="bg-gray-100 text-gray-600 border-b px-4 py-2">Name</th>
            <th class="bg-gray-100 text-gray-600 border-b px-4 py-2">Posts</th>
            <th class="w-1/6 bg-gray-100 text-gray-600 border-b px-4 py-2">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
        <tr>
            <td class="border-b px-4 py-2">{{ $category->name }}</td>
            <td class="border-b px-4 py-2 text-center">
                {{ $category->posts->count() }}
            </td>
            <td class="border-b px-4 py-2">#</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
