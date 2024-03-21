@extends('layouts.masterlayout')
@section('content')
    @include('clients.blocks.hero')
    @include('clients.blocks.product-section')
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/header.css')}}">
@endsection