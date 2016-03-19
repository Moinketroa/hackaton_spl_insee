@extends('layouts.app')

@section('content')
<div class="fs-form-wrap row" id="fs-form-wrap">

    <form id="myform" class="fs-form fs-form-full" autocomplete="off" method="POST" action="{{url('/recommande_r')}}">
        <ol class="fs-fields">
            
            <li data-input-trigger>
                <label class="fs-field-label fs-anim-upper" for="prio">Quelle est votre priorité ?</label>
                <div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
                    <span><input id="prioa" name="prio" type="radio" value="com" required/><label for="prioa" class="radio-com">Commerces</label></span>
                    <span><input id="priob" name="prio" type="radio" value="hop" required/><label for="priob" class="radio-hop">Hopitaux</label></span>
                </div>
            </li>
           
            
            <li data-input-trigger>
                <label class="fs-field-label fs-anim-upper" for="house">Voulez vous une maison de retraite ?</label>
                <div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
                    <span><input id="housea" name="house" type="radio" value="true" required/><label for="housea" class="radio-ret">Oui</label></span>
                    <span><input id="houseb" name="house" type="radio" value="false"  required/><label for="houseb" class="radio-nre">Non</label></span>
                </div>
            </li>
        
        </ol><!-- /fs-fields -->
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button class="fs-submit" type="submit">Valider</button>
    </form><!-- /fs-form -->
</div><!-- /fs-form-wrap -->
@endsection
