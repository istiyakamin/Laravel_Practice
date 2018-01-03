@extends('layout.app')

@section('title', 'Welcome To Laravel')

@section('body')
    {{$lara}}
    @foreach($vel as $bel)
        {{$bel}}
    @endforeach
@endsection