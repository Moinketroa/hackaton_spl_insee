@extends('layouts.app')

@section('content')
<!-- Pricing Tables - START -->
<div class="container">
    <div class="row">
        
        <div class="col-md-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4 class="text-center">Etudiant</h4>
                </div>
                <img src="{{Request::root()}}/assets/image/etu.jpg"/>
                
                <div class="panel-footer">
                    <a class="btn btn-lg btn-block btn-primary" href="{{ url('/categorie/etudiant') }}">Rechercher</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h4 class="text-center">Senior</h4>
                </div>
                 <img src="{{Request::root()}}/assets/image/fam.jpg"/>
                <div class="panel-footer">
                    <a class="btn btn-lg btn-block btn-success" href="{{ url('/categorie/retraite') }}">Rechercher</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h4 class="text-center">Professionnel</h4>
                </div>
                 <img src="{{Request::root()}}/assets/image/pro.jpg"/>
                <div class="panel-footer">
                    <a class="btn btn-lg btn-block btn-danger" href="{{ url('/categorie/professionel') }}">Rechercher</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pricing Tables - END -->
@endsection
