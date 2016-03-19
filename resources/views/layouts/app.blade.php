<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome minified css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        
    <!-- Font Open Sans -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
    <!-- Custom css -->
    <link rel="stylesheet" href="{{Request::root()}}/assets/css/style.css">
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    
    
    <link rel="stylesheet" type="text/css" href="{{Request::root()}}/assets/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="{{Request::root()}}/assets/css/component.css" />
    <link rel="stylesheet" type="text/css" href="{{Request::root()}}/assets/css/cs-select.css" />
    <link rel="stylesheet" type="text/css" href="{{Request::root()}}/assets/css/cs-skin-boxes.css" />
    <script src="{{Request::root()}}/assets/js/modernizr.custom.js"></script>
    
    


</head>
<body id="app-layout">  
    
    
    <header class="navbar-fixed-top">
            <!-- Navbar top -->
            <div role="banner" class="navbar navbar-top">
                <div class="container">
                    <div class="navbar-top">
                        <nav role="navigation" class="navbar-collapse">
                            
                            <ul class="nav navbar-nav separator top-info">
                                <li>
                                    <a href="#">Informations légal</a>
                                </li>                                                           
                                <li>
                                    <a href="#">Contact</a>
                                </li> 
                                
                                
                            </ul>
                              <ul class="nav navbar-nav pull-right">
                                   
                                    <!-- Authentication Links -->
                                @if (Auth::guest())
                                    <li><a href="{{ url('/login') }}">Connexion</a></li>
                                    <li><a href="{{ url('/register') }}">Inscription</a></li>
                                @else
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                        </ul>
                                    </li>
                                @endif



                               
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            
            
            <!-- Navbar -->
            <div role="banner" class="navbar navbar-menu navbar-inverse">
                <div class="container">
                    <div class="navbar-header">
                        <button data-toggle="collapse-side" data-target=".side-collapse" data-container="#main" type="button" class="navbar-toggle pull-left"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    </div>
                    <div class="side-collapse navbar-inverse in">
                        <nav role="navigation" class="navbar-collapse">
                            <ul class="nav navbar-nav navbar-brand">
                                <li>
                                    <a href="{{ url('/') }}">
                                     
                                        <span class="navbar-brand-text">Great Grand-Nancy</span>
                                    </a>
                                </li>
                            </ul>
                            
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="#">Mes recherches</a>
                                </li>
                                <li>
                                    <a href="#">Le Grand Nancy</a>
                                </li>
                                <li>
                                    <a href="#">Actualités</a>
                                </li>
                                
                                
                            </ul>
                            <ul class="nav navbar-nav top-info">
                                <li>
                                    <a href="#">Informations légal</a>
                                </li>                                                           
                                <li>
                                    <a href="#">Contact</a>
                                </li>  
                                <!-- Authentication Links -->
                                @if (Auth::guest())
                                    <li><a href="{{ url('/login') }}">Connexion</a></li>
                                    <li><a href="{{ url('/register') }}">Inscription</a></li>
                                @else
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                        </ul>
                                    </li>
                                @endif
                                
                                
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>




        </header>
        
        
        
        
         <!-- Main -->
        <div id="main">
            
            
            
            @yield('content')

        
        </div>  
        
        
        
        <footer>
            
            
            <div class="col-sm-6 col-md-4 info-footer">       
                <h4>Information utililes</h4>
            </div>
            <div class="col-sm-6 col-md-4 info-footer">       
                <h4>Information utililes</h4>
            </div>
            <div class="col-sm-6 col-md-4 info-footer">       
                <h4>Information utililes</h4>
                <ul>
                    <li>
                        <a href="#">Mes recherches</a>
                    </li>
                    <li>
                        <a href="#">Le Grand Nancy</a>
                    </li>
                    <li>
                        <a href="#">Actualités</a>
                    </li>                    
                </ul>
            </div>
        </footer>
    <!-- JQuery minified Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    
    <!-- Bootstrap minified Javascript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!-- Custom Javascript -->
    <script src="{{Request::root()}}/assets/js/style.js"></script>
    
    <script src="{{Request::root()}}/assets/js/classie.js"></script>
    <script src="{{Request::root()}}/assets/js/selectFx.js"></script>
    <script src="{{Request::root()}}/assets/js/fullscreenForm.js"></script>
    
    
    <script>
        
            var baseUrl="{{Request::root()}}";
			(function() {
                
				var formWrap = document.getElementById( 'fs-form-wrap' );
                    if(formWrap){
                    [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
        
                        new SelectFx( el, {
                            stickyPlaceholder: false,
                            onChange: function(val){
                                console.log(val);
                            
                                el.parentNode.querySelector('.cs-placeholder').style.background = val;
                            }
                        });
                    } );

                    new FForm( formWrap, {
                        onReview : function() {
                            classie.add( document.body, 'overview' ); // for demo purposes only
                        }
                    } );
                    }
			})();
            
            
            
            
            
            
            
            
            
            
            
            
		</script>
        
        @yield('extra-js')
</body>
</html>
