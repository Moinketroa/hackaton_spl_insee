@extends('layouts.app')

@section('content')
<div class="fs-form-wrap row" id="fs-form-wrap">

    <form id="myform" class="fs-form fs-form-full" autocomplete="off" method="POST" action="{{url('/recommande')}}">
        <ol class="fs-fields">
            
            <li>
                <label id="school" class="fs-field-label fs-anim-upper" for="school">Nom de l'établisement scolaire :</label>
                <div class="ui-widget">
                    <input class="fs-anim-lower" id="schoolinput" name="school" type="text" placeholder="Faculté des sciences et technologies" required/>
                </div>
            </li>
            
           
            
            <li data-input-trigger>
                <label class="fs-field-label fs-anim-upper" for="house">Type de logement</label>
                <div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
                    <span><input id="housea" name="house" type="radio" value="true" required/><label for="housea" class="radio-crous">Residence universitaire</label></span>
                    <span><input id="houseb" name="house" type="radio" value="false"  required/><label for="houseb" class="radio-privee">Location d'appartement</label></span>
                </div>
            </li>
            
             <li data-input-trigger>
                <label class="fs-field-label fs-anim-upper" for="house">Vehicule disponible ?</label>
                <div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
                    <span><input id="transa" name="trans" type="radio" value="trans" required/><label for="transa" class="radio-tram">Bus/Tram</label></span>
                    <span><input id="transb" name="trans" type="radio" value="car" required/><label for="transb" class="radio-car">Voiture</label></span>
                    <span><input id="transc" name="trans" type="radio" value="bike" required/><label for="transc" class="radio-bike">Velo</label></span>
                    <span><input id="transd" name="trans" type="radio" value="foot" required/><label for="transd" class="radio-walk">Marche</label></span>
                </div>
            </li>
            
            
            
            <li data-input-trigger>
                <label class="fs-field-label fs-anim-upper">Sport</label>
                <select class="cs-select cs-skin-boxes fs-anim-lower" name="sport1">
                    <option data-bg="#588c75" data-class="color-588c75" selected>Vide</option>
                    
                    @foreach ($sport as $sp)
                        <option data-bg="#b0c47f" data-class="color-b0c47f">{{$sp->type}}</option>
                    @endforeach
                    
                    
                    
                   
                </select>
                
                <select class="cs-select cs-skin-boxes fs-anim-lower"  name="sport2">
                    <option data-bg="#588c75" data-class="color-588c75" selected>Vide</option>
                      @foreach ($sport as $sp)
                        <option data-bg="#b0c47f" data-class="color-b0c47f">{{$sp->type}}</option>
                    @endforeach
                </select>
                
            </li>
            <li data-input-trigger>
                <label class="fs-field-label fs-anim-upper">Loisir</label>
                <select class="cs-select cs-skin-boxes fs-anim-lower" name="loisir1">
                    <option data-bg="#588c75" data-class="color-588c75" selected>Vide</option>
                    <option data-bg="url({{Request::root()}}/assets//image/resto.png)" value="restaurant" data-class="resto">Restaurant</option>
                    <option data-bg="url({{Request::root()}}/assets//image/bar.png)" value="bar" data-class="bar">Bar</option>
                    <option data-bg="url({{Request::root()}}/assets//image/cinema.png)" value="cinema" data-class="cine">Cinéma</option>
                    <option data-bg="url({{Request::root()}}/assets//image/ff.png)" value="fastfood" data-class="ff">FastFood</option>
                    <option data-bg="url({{Request::root()}}/assets//image/club.png)" value="club" data-class="club">Club</option>
                 </select>   
                
                <select class="cs-select cs-skin-boxes fs-anim-lower" name="loisir2">
                    <option data-bg="#588c75" data-class="color-588c75" selected>Vide</option>
                    <option data-bg="url({{Request::root()}}/assets//image/resto.png)" value="restaurant" data-class="resto">Restaurant</option>
                    <option data-bg="url({{Request::root()}}/assets//image/bar.png)" value="bar" data-class="bar">Bar</option>
                    <option data-bg="url({{Request::root()}}/assets//image/cinema.png)" value="cinema" data-class="cine">Cinéma</option>
                    <option data-bg="url({{Request::root()}}/assets//image/ff.png)" value="fastfood" data-class="ff">FastFood</option>
                    <option data-bg="url({{Request::root()}}/assets//image/club.png)" value="club" data-class="club">Club</option>
                 </select>   
                
                <select class="cs-select cs-skin-boxes fs-anim-lower" name="loisir3">
                    <option data-bg="#588c75" data-class="color-588c75" selected>Vide</option>
                    <option data-bg="url({{Request::root()}}/assets//image/resto.png)" value="restaurant" data-class="resto">Restaurant</option>
                    <option data-bg="url({{Request::root()}}/assets//image/bar.png)" value="bar" data-class="bar">Bar</option>
                    <option data-bg="url({{Request::root()}}/assets//image/cinema.png)" value="cinema" data-class="cine">Cinéma</option>
                    <option data-bg="url({{Request::root()}}/assets//image/ff.png)" value="fastfood" data-class="ff">FastFood</option>
                    <option data-bg="url({{Request::root()}}/assets//image/club.png)" value="club" data-class="club">Club</option>
                 </select>       
                
                
                
            </li>
            
            
            
            
            
        </ol><!-- /fs-fields -->
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button class="fs-submit" type="submit">Valider</button>
    </form><!-- /fs-form -->
</div><!-- /fs-form-wrap -->
@endsection
