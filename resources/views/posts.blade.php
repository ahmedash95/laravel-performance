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
        @foreach($posts as $post)
            <tr>
                <td class="py-4 border-b px-4 py-2">
                    <p>{{ $post->title }}</p>
                    <span class="text-gray-600 text-sm">Published at {{ $post->published_at }} AM</span>
                </td>
                <td class="border-b px-4 py-2">{{ $post->user->name }}</td>
                <td class="border-b px-4 py-2">
                    @if($post->status === 'published')
                    <span class="bg-green-200 text-green-800 py-2 px-3 rounded-full">
                        Published
                    </span>
                    @elseif($post->status === 'draft')
                    <span class="bg-yellow-200 text-yellow-800 py-2 px-3 rounded-full">
                        Draft
                    </span>
                    @elseif($post->status === 'archived')
                    <span class="bg-red-200 text-red-800 py-2 px-3 rounded-full">
                        Archived
                    </span>
                    @endif
                </td>
                <td class="border-b px-4 py-2">{{ $post->category->name }}</td>
                <td class="border-b px-4 py-2 text-center">
                    @foreach($post->tags as $tag)
                    <div class="bg-gray-300 text-gray-700 text-sm rounded-full px-2 py-1 mr-1 mb-1">{{ substr($tag->name,0,10) }}</div>
                    @endforeach
                </td>
                <td class="border-b px-4 py-2">#</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
