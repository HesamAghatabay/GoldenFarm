@extends('layouts.client.app')
@section('tilte', 'Home')
@section('content')

    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar the-avatar mb-5" src="{{asset('assets/avatar.jpg')}}" alt="farmer" />
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">Welcome To Golden Farm</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light mb-0">Graphic Artist - Web Designer - Illustrator</p>
        </div>
    </header>


@endsection
