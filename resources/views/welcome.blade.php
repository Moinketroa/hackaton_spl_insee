@extends('layouts.app')

@section('content')
<ul class="parrallax-layer-wrapper">
    <li class="parrallax-layer" data-delta="100">
        <img src="{{Request::root()}}/assets/image/stan.jpg">
    </li>
   
    <li class="parallax-overlay">
        <div class="parallax-overlay-inner">
            
            <button class="btn btn-lg" onclick="window.location.href='{{url('/categorie')}}'">Chercher un logement</button>
        </div>

    </li>
</ul>
@endsection
