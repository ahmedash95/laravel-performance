@extends('home')
@section('content')
    <div id="page-header" class="py-4 px-12 bg-white shadow-md flex justify-between">
        <div id="title">
            <p class="text-3xl font-bold text-blue-900">{{ $name }}</p>
        </div>
        <div id="actions" class="mt-3">
            @yield('actions')
        </div>
    </div>
    <div class="mt-8">
        @yield('page-content')
    </div>
@endsection
