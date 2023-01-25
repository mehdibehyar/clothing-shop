@extends('master')

@section('content')
    <div class="container-fluid">
        {{$slot}}
    </div>
@endsection
@section('title')
    {{$title??''}}
@endsection
@section('script')
    {{$script??''}}
@endsection
