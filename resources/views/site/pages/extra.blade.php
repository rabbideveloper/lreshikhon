@extends('site.layouts.master')
@section('title','Extra Page')

@section('style')
    <style>
        h1 {
            color: green;
            text-align: center;
            margin-top: 2rem;
        }
    </style>
@endsection


@section('content')
    <h1>Extra Page</h1>
@endsection


@section('extrafields')
    @parent
    <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, vero!</h3>
@endsection
