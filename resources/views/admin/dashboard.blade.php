@extends('layouts.app')

@section('content')
    <div class="banner">
        <img src="https://png.pngtree.com/background/20210715/original/pngtree-bright-and-simple-light-blue-banner-background-picture-image_1303887.jpg"
            alt="">
    </div>
    <div class="container pt-4">
        <h1 class="text-info">Welcome To My Boolfolio</h1>
    </div>
@endsection


<style>
    .banner img {
        width: 100%;
        height: 50%;
        position: relative;
    }

    h1 {
        position: absolute;
        top: 26%;
        left: 32%;
    }
</style>
