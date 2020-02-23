@extends('page',['name' => $name])
@section('actions')
    <a href="#" class="bg-blue-500 p-3 rounded shadow-md font-bold text-blue-100">New Tag</a>
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
        <tr>
            <td class="border-b px-4 py-2">Laravel</td>
            <td class="border-b px-4 py-2 text-center">
                1530
            </td>
            <td class="border-b px-4 py-2">#</td>
        </tr>
        <tr>
            <td class="border-b px-4 py-2">Rails</td>
            <td class="border-b px-4 py-2 text-center">
                5323
            </td>
            <td class="border-b px-4 py-2">#</td>
        </tr>
        <tr>
            <td class="border-b px-4 py-2">Design-Patterns</td>
            <td class="border-b px-4 py-2 text-center">
                1235
            </td>
            <td class="border-b px-4 py-2">#</td>
        </tr>
        <tr>
            <td class="border-b px-4 py-2">GoLang</td>
            <td class="border-b px-4 py-2 text-center">
                1241
            </td>
            <td class="border-b px-4 py-2">#</td>
        </tr>
        </tbody>
    </table>
</div>
@endsection
