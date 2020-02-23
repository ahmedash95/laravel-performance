@extends('page',['name' => $name])
@section('actions')
    <a href="#" class="bg-blue-500 p-3 rounded shadow-md font-bold text-blue-100">New Post</a>
@endsection
@section('page-content')
<div class="bg-white w-5/6 mx-auto shadow-2xl rounded-lg">
    <table class="table-auto w-full">
        <thead>
        <tr>
            <th class="bg-gray-100 text-gray-600 border-b px-4 py-2">Title</th>
            <th class="bg-gray-100 text-gray-600 border-b px-4 py-2">Author</th>
            <th class="bg-gray-100 text-gray-600 border-b px-4 py-2">Status</th>
            <th class="bg-gray-100 text-gray-600 border-b px-4 py-2">Category</th>
            <th class="bg-gray-100 text-gray-600 border-b px-4 py-2">Tags</th>
            <th class="bg-gray-100 text-gray-600 border-b px-4 py-2">Actions</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="py-4 border-b px-4 py-2">
                <p>Intro to CSS</p>
                <span class="text-gray-600 text-sm">Published at 2020-01-12 10:00 AM</span>
            </td>
            <td class="border-b px-4 py-2">Ahmed Ashraf</td>
            <td class="border-b px-4 py-2">
                <span class="bg-green-200 text-green-800 py-2 px-3 rounded-full">
                    Published
                </span>
            </td>
            <td class="border-b px-4 py-2">GoLang</td>
            <td class="border-b px-4 py-2 text-center">
                <div class="bg-gray-300 text-gray-700 text-sm rounded-full px-2 py-1 mr-1 mb-1">concurrency</div>
                <div class="bg-gray-300 text-gray-700 text-sm rounded-full px-2 py-1 mr-1 mb-1">go-routines</div>
            </td>
            <td class="border-b px-4 py-2">#</td>
        </tr>
        <tr>
            <td class="py-4 border-b px-4 py-2">
                <p>5 Common design patterns in PHP</p>
                <span class="text-gray-600 text-sm">Published at 2020-01-12 10:00 AM</span>
            </td>
            <td class="border-b px-4 py-2">Kareem Badawy</td>
            <td class="border-b px-4 py-2">
                <span class="bg-yellow-200 text-yellow-800 py-2 px-3 rounded-full">
                    Draft
                </span>
            </td>
            <td class="border-b px-4 py-2">PHP</td>
            <td class="border-b px-4 py-2 text-center">
                <div class="bg-gray-300 text-gray-700 text-sm rounded-full px-2 py-1 mr-1 mb-1">design-patterns</div>
                <div class="bg-gray-300 text-gray-700 text-sm rounded-full px-2 py-1 mr-1 mb-1">decorator-pattern</div>
                <div class="bg-gray-300 text-gray-700 text-sm rounded-full px-2 py-1 mr-1 mb-1">oop</div>
            </td>
            <td class="border-b px-4 py-2">#</td>
        </tr>
        <tr>
            <td class="py-4 border-b px-4 py-2">
                <p>Indexs in MySQL 5.4</p>
                <span class="text-gray-600 text-sm">Published at 2020-01-12 10:00 AM</span>
            </td>
            <td class="border-b px-4 py-2">Ahmed Helmy</td>
            <td class="border-b px-4 py-2">
                <span class="bg-red-200 text-red-800 py-2 px-3 rounded-full">
                    Archived
                </span>
            </td>
            <td class="border-b px-4 py-2">MySQL</td>
            <td class="border-b px-4 py-2 text-center">
                <div class="bg-gray-300 text-gray-700 text-sm rounded-full px-2 py-1 mr-1 mb-1">MySQL-Indexes</div>
            </td>
            <td class="border-b px-4 py-2">#</td>
        </tr>
        <tr>
            <td class="py-4 border-b px-4 py-2">
                <p>Quick intro to Rails</p>
                <span class="text-gray-600 text-sm">Published at 2020-02-12 10:00 AM</span>
            </td>
            <td class="border-b px-4 py-2">Ahmed Magdy</td>
            <td class="border-b px-4 py-2">
                <span class="bg-green-200 text-green-800 py-2 px-3 rounded-full">
                    Published
                </span>
            </td>
            <td class="border-b px-4 py-2">Rails</td>
            <td class="border-b px-4 py-2 text-center">
                <div class="bg-gray-300 text-gray-700 text-sm rounded-full px-2 py-1 mr-1 mb-1">Rails</div>
                <div class="bg-gray-300 text-gray-700 text-sm rounded-full px-2 py-1 mr-1 mb-1">Ruby</div>
                <div class="bg-gray-300 text-gray-700 text-sm rounded-full px-2 py-1 mr-1 mb-1">Laravel</div>
            </td>
            <td class="border-b px-4 py-2">#</td>
        </tr>
        </tbody>
    </table>
</div>
@endsection
