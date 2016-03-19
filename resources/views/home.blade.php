@extends('layouts.app')

@section('content')
<ul class="parrallax-layer-wrapper">


    <li class="parrallax-layer" data-delta="100">
        <img src="assets/image/home-parallax/1.png">
    </li>
    <li class="parrallax-layer" data-delta="50">
        <img src="assets/image/home-parallax/2.png">
    </li>


    <li class="parallax-overlay">
        <div class="parallax-overlay-inner">
            <img src="assets/image/gn.png">
            <h1>My website</h1>
        </div>

    </li>
</ul>
@endsection
