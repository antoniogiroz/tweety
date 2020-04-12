@extends('layouts.app')

@section('content')
Profile of {{ $user->name }}

@include('_timeline', [
'tweets' => $user->tweets
])
@endsection
