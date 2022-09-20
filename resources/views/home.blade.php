@extends('layouts.master')
@section('title')
    <title> HOME </title>
@endsection
@section('header')
    <h1>HOME</h1>
@endsection
@section('subheader')
    <li class="breadcrumb-item">Home</li>
@endsection
@section('content')
    <head>
        <title>Home</title>
    </head>
    <body>
    <div style="background: #771bb3; font-size: 24px; color: white">WELCOME!</div>
    </body>
    <!-- Navbar-->
                <a class="dropdown-item" href="{{url('logout')}}">Logout</a>
@endsection
