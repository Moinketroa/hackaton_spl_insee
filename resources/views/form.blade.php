@extends('layouts.app')

@section('content')
<div class="fs-form-wrap row" id="fs-form-wrap">

    <form id="myform" class="fs-form fs-form-full" autocomplete="off">
        <ol class="fs-fields">
            
            <li>
                <label class="fs-field-label fs-anim-upper" for="school">Nom de l'établisement scolaire :</label>
                <input class="fs-anim-lower" id="school" name="school" type="text" placeholder="Faculté des sciences et technologies" required/>
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
                    <span><input id="transa" name="trans" type="radio" value="true" required/><label for="transa" class="radio-tram">Bus/Tram</label></span>
                    <span><input id="transb" name="trans" type="radio" value="false" required/><label for="transb" class="radio-car">Voiture</label></span>
                    <span><input id="transc" name="trans" type="radio" value="false" required/><label for="transc" class="radio-bike">Velo</label></span>
                    <span><input id="transd" name="trans" type="radio" value="false" required/><label for="transd" class="radio-walk">Marche</label></span>
                </div>
            </li>
            
            
            
            <li data-input-trigger>
                <label class="fs-field-label fs-anim-upper">Sport</label>
                <select class="cs-select cs-skin-boxes fs-anim-lower" name="sport1">
                    <option data-bg="#588c75" data-class="color-588c75" selected>Vide</option>
                    <option data-bg="#b0c47f" data-class="color-b0c47f">Football</option>
                    <option data-bg="#f3e395" data-class="color-f3e395">Taekwondo</option>
                    <option data-bg="#f3ae73" data-class="color-f3ae73">#f3ae73</option>
                    <option data-bg="#da645a" data-class="color-da645a">#da645a</option>
                    <option data-bg="#79a38f" data-class="color-79a38f">#79a38f</option>
                    <option data-bg="#c1d099" data-class="color-c1d099">#c1d099</option>
                    <option data-bg="#f5eaaa" data-class="color-f5eaaa">#f5eaaa</option>
                    <option data-bg="#f5be8f" data-class="color-f5be8f">#f5be8f</option>
                    <option data-bg="#e1837b" data-class="color-e1837b">#e1837b</option>
                    <option data-bg="#9bbaab" data-class="color-9bbaab">#9bbaab</option>
                    <option data-bg="#d1dcb2" data-class="color-d1dcb2">#d1dcb2</option>
                    <option data-bg="#f9eec0" data-class="color-f9eec0">#f9eec0</option>
                    <option data-bg="#f7cda9" data-class="color-f7cda9">#f7cda9</option>
                    <option data-bg="#e8a19b" data-class="color-e8a19b">#e8a19b</option>
                    <option data-bg="#bdd1c8" data-class="color-bdd1c8">#bdd1c8</option>
                    <option data-bg="#e1e7cd" data-class="color-e1e7cd">#e1e7cd</option>
                    <option data-bg="#faf4d4" data-class="color-faf4d4">#faf4d4</option>
                    <option data-bg="#fbdfc9" data-class="color-fbdfc9">#fbdfc9</option>
                    <option data-bg="#f1c1bd" data-class="color-f1c1bd">#f1c1bd</option>
                </select>
                
                <select class="cs-select cs-skin-boxes fs-anim-lower"  name="sport2">
                    <option data-bg="#588c75" data-class="color-588c75" selected>Vide</option>
                    <option data-bg="#b0c47f" data-class="color-b0c47f">Football</option>
                    <option data-bg="#f3e395" data-class="color-f3e395">Taekwondo</option>
                    <option data-bg="#f3ae73" data-class="color-f3ae73">#f3ae73</option>
                    <option data-bg="#da645a" data-class="color-da645a">#da645a</option>
                    <option data-bg="#79a38f" data-class="color-79a38f">#79a38f</option>
                    <option data-bg="#c1d099" data-class="color-c1d099">#c1d099</option>
                    <option data-bg="#f5eaaa" data-class="color-f5eaaa">#f5eaaa</option>
                    <option data-bg="#f5be8f" data-class="color-f5be8f">#f5be8f</option>
                    <option data-bg="#e1837b" data-class="color-e1837b">#e1837b</option>
                    <option data-bg="#9bbaab" data-class="color-9bbaab">#9bbaab</option>
                    <option data-bg="#d1dcb2" data-class="color-d1dcb2">#d1dcb2</option>
                    <option data-bg="#f9eec0" data-class="color-f9eec0">#f9eec0</option>
                    <option data-bg="#f7cda9" data-class="color-f7cda9">#f7cda9</option>
                    <option data-bg="#e8a19b" data-class="color-e8a19b">#e8a19b</option>
                    <option data-bg="#bdd1c8" data-class="color-bdd1c8">#bdd1c8</option>
                    <option data-bg="#e1e7cd" data-class="color-e1e7cd">#e1e7cd</option>
                    <option data-bg="#faf4d4" data-class="color-faf4d4">#faf4d4</option>
                    <option data-bg="#fbdfc9" data-class="color-fbdfc9">#fbdfc9</option>
                    <option data-bg="#f1c1bd" data-class="color-f1c1bd">#f1c1bd</option>
                </select>
                
            </li>
            <li data-input-trigger>
                <label class="fs-field-label fs-anim-upper">Loisir</label>
                <select class="cs-select cs-skin-boxes fs-anim-lower" name="loisir1">
                    <option data-bg="#588c75" data-class="color-588c75" selected>Vide</option>
                    <option data-bg="url({{Request::root()}}/assets//image/resto.png)" value="restau" data-class="resto">Restaurant</option>
                    <option data-bg="url({{Request::root()}}/assets//image/bar.png)" value="bar" data-class="bar">Bar</option>
                    <option data-bg="url({{Request::root()}}/assets//image/cinema.png)" value="cinema" data-class="cine">Cinéma</option>
                    <option data-bg="url({{Request::root()}}/assets//image/ff.png)" value="fastfood" data-class="ff">FastFood</option>
                    <option data-bg="url({{Request::root()}}/assets//image/club.png)" value="club" data-class="club">Club</option>
                 </select>   
                
                <select class="cs-select cs-skin-boxes fs-anim-lower" name="loisir2">
                    <option data-bg="#588c75" data-class="color-588c75" selected>Vide</option>
                    <option data-bg="url({{Request::root()}}/assets//image/resto.png)" value="restau" data-class="resto">Restaurant</option>
                    <option data-bg="url({{Request::root()}}/assets//image/bar.png)" value="bar" data-class="bar">Bar</option>
                    <option data-bg="url({{Request::root()}}/assets//image/cinema.png)" value="cinema" data-class="cine">Cinéma</option>
                    <option data-bg="url({{Request::root()}}/assets//image/ff.png)" value="fastfood" data-class="ff">FastFood</option>
                    <option data-bg="url({{Request::root()}}/assets//image/club.png)" value="club" data-class="club">Club</option>
                 </select>   
                
                <select class="cs-select cs-skin-boxes fs-anim-lower" name="loisir3">
                    <option data-bg="#588c75" data-class="color-588c75" selected>Vide</option>
                    <option data-bg="url({{Request::root()}}/assets//image/resto.png)" value="restau" data-class="resto">Restaurant</option>
                    <option data-bg="url({{Request::root()}}/assets//image/bar.png)" value="bar" data-class="bar">Bar</option>
                    <option data-bg="url({{Request::root()}}/assets//image/cinema.png)" value="cinema" data-class="cine">Cinéma</option>
                    <option data-bg="url({{Request::root()}}/assets//image/ff.png)" value="fastfood" data-class="ff">FastFood</option>
                    <option data-bg="url({{Request::root()}}/assets//image/club.png)" value="club" data-class="club">Club</option>
                 </select>       
                
                
                
            </li>
            
            
            
            
            
        </ol><!-- /fs-fields -->
        <button class="fs-submit" type="submit">Valider</button>
    </form><!-- /fs-form -->
</div><!-- /fs-form-wrap -->
@endsection
