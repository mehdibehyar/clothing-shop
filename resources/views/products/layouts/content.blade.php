@extends('products.master')

@section('content')

    {{$slot}}

@endsection
@section('script')
    {{$script?? ''}}
@endsection
