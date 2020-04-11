@extends('layouts.app')

@section('content')
<div class="lg:flex lg:justify-between">
    <div class="lg:w-32">
        @include('_sidebar-links')
    </div>
    <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">
        @include('_publish-tweet-panel')

        <div class="border border-gray-300 rounded-lg">
            @foreach ($tweets as $tweet)
            @include('_tweet')
            @endforeach
        </div>
    </div>
    <div class="p-4 bg-blue-100 rounded-lg lg:w-1/6">
        @include('_friend-list')
    </div>
</div>
@endsection
