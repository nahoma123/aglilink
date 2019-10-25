<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="{{asset('/img/favicon.png')}}">

        <title>AgriLink</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="{{asset('/css/mega_menu.css')}}" rel="stylesheet" id="bootstrap-css">

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Bootstrap core CSS -->
        <link href="{{asset('/css/bootstrap.css')}}" rel="stylesheet">
        <script src="{{asset('/js/mega_menu.js')}}"></script>
        <!-- Custom styles for this template -->
        <link href="{{asset('/css/main.css')}}" rel="stylesheet">
        <script src="{{asset('/js/angular.min.js')}}"></script>
        <!-- Fonts from Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,900' rel='stylesheet' type='text/css'>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.5/angular.min.js"></script>-->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="/css/style.css" />
        <style type="text/css">
            .row{
                margin-right: 0px !important;
                margin-left: 0px !important;
            }
        </style>
    </head>

    <body class=""  ng-app="" ng-controller="contactscontroller">

        <!-- Fixed navbar -->
        <div class="navbar-static-top" style="background-color: white;">
            <!--      <div class="container">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#"><b>FLATTY</b></a>
                    </div>
                    <div class="navbar-collapse collapse">
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Already a member?</a></li>
                      </ul>
                    </div>/.nav-collapse 
                  </div>-->
            @yield('megamenu')
        </div>
        
    <! -- CAROUSEL -->
	<!-- Start WOWSlider.com BODY section -->
        <div class="row container-fluid" >
            <div id="wowslider-container" class="container col-md-10" >
	<div class="ws_images"><ul>
	<li><a href="http://www.wowslider.com/index.html#overview"><img src="img/slide1new.jpg" alt="" title="" id="wows_0"/></a></li>
	<li><a href="http://www.wowslider.com/demo.html"><img src="img/slide2new.jpg" alt="You can add description to slides!" title="You can add description to slides!" id="wows_1"/></a></li>
	<li><a href="http://www.wowslider.com/index.html#download"><img src="img/slide3new.jpg" alt="" title="" id="wows_2"/></a></li>
	</ul></div>
	<div class="ws_bullets"><div>
	<a href="#" title=""><img src="/img/slide1new.jpg" alt=""/>1</a>
	<a href="#" title="You can add description to slides!"><img src="/img/slide2new.jpg" alt="You can add description to slides!"/>2</a>
	<a href="#" title=""><img src="/img/slide3new.jpg" alt=""/>3</a>
	</div></div>
		<a href="#" class="ws_frame"></a>
		<div class="ws_shadow"></div>
	</div>
        </div>
	<!-- End WOWSlider.com BODY section -->
	
        @yield('content')

        <div class="container">
            <hr/>
            <div class="row centered">
                <div class="col-lg-6 col-lg-offset-3">
                    Copyright Agrilink <i class="glyphicon glyphicon-copyright-mark" style="display: inline;"></i>2018
                </div>
                <div class="col-lg-3"></div>
            </div><!-- /row -->
            <p class="centered"></p>
        </div><!-- /container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="{{asset('/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="/js/script.js"></script>
        <script type="text/javascript" src="/js/wowslider.js"></script>
        
    </body>
</html>