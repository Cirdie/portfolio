@extends('layouts.app')

@section('title', 'My Portfolio')

@section('content')

    @include('portfolio.navbar')
    @include('portfolio.hero')
    @include('portfolio.about')
    @include('portfolio.skills')
    @include('portfolio.contact')

@endsection
