<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="application/javascript"></script>
<style>
    img.thumb:hover {
       /* transition: ease-in 2s;
        border: 1px solid red;
        width: 200px;
        background: #8080801c;*/
    }

    li{
        list-style: none;
    }
    img.thumb {
        width: 100%;
        height: 100%;
        box-shadow: 2px 2px 2px 2px;
        margin-top: 20px;
        margin-left: 50px;

    }
    .color-preview {
        border: 1px solid #CCC;
        margin: 2px;
        zoom: 1;
        vertical-align: top;
        display: inline-block !important;
        cursor: pointer;
        overflow: hidden;
        width: 20px;
        height: 20px;
    }
    .form-horizontal .control-label{
        width:100px !important;
    }
    input#text-string {
        height: 37px !important;
        width: 200px;
    }
    button#add-text {
        background: #80808059;
        box-shadow: 2px 1px 2px 2px #8080806b;
    }
    .rotate {
        -webkit-transform:rotate(90deg);
        -moz-transform:rotate(90deg);
        -o-transform:rotate(90deg);
        /* filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=1.5); */
        -ms-transform:rotate(90deg);
    }
    .Arial{font-family:"Arial";}
    .Helvetica{font-family:"Helvetica";}
    .MyriadPro{font-family:"Myriad Pro";}
    .Delicious{font-family:"Delicious";}
    .Verdana{font-family:"Verdana";}
    .Georgia{font-family:"Georgia";}
    .Courier{font-family:"Courier";}
    .ComicSansMS{font-family:"Comic Sans MS";}
    .Impact{font-family:"Impact";}
    .Monaco{font-family:"Monaco";}
    .Optima{font-family:"Optima";}
    .HoeflerText{font-family:"Hoefler Text";}
    .Plaster{font-family:"Plaster";}
    .Engagement{font-family:"Engagement";}
    .span6 {
      /*  background-image: url(../img/grid.png);
        background-repeat: repeat;*/
    }

    #phoneDiv{
        background: none !important;
        background-repeat: repeat;
    }
    @media screen and (max-width: 1350px){

    }
    @media screen and (max-width: 1295px){}
    @media screen and (max-width: 1200px){input#text-string{width:150px !important;}}
    @media screen and (max-width: 1100px){}
    @media screen and (max-width: 980px){  .input-append,.input-prepend{margin-left: 100%; !important;} .maindiv{ width: 650px !important;}}
    @media screen and (max-width: 870px){}
    @media screen and (max-width: 735px){.input-append,.input-prepend{margin-left: 35%; !important;}}
    @media screen and (max-width: 767px){.input-append,.input-prepend{margin-left: 0px; !important;} .maindiv{ width: 625px !important;}}
    @media screen and (max-width: 635px){}
    @media screen and (max-width: 738px){.input-append,.input-prepend{margin-left: 0px; !important;} .maindiv{ width: 500px !important;}}
    @media screen and (max-width: 431px){.maindiv{ width: 280px !important;}}
    @media screen and (max-width: 480px){.input-append,.input-prepend{margin-left: 0px; !important;}}
    @media screen and (max-width: 510px){}
    @media screen and (max-width: 417px){.maindiv{width: 300px !important;}}
    @media screen and (max-width: 388px){.maindiv{width: 180px !important;}}
    @media screen and (max-width: 379px){.maindiv{width: 180px !important;}}
    @media screen and (max-width: 615px){.maindiv{ width: 350px !important;}}
    @media screen and (max-width: 500px){.maindiv{ width: 300px !important;}}
    @media screen and (max-width: 351px){.maindiv{ width: 180px !important;}}
    @media screen and (max-width: 308px){.maindiv{ width: 180px !important;}}
    @media screen and (max-width: 333px){.maindiv{ width: 180px !important;} input#text-string{ width: 90px !important; } input[type=file] {  display: inline !important; width: 20px !important;  }}

</style>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{asset('css/bootstrap.min2.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-responsive.min.css')}}" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{asset('css/jquery.miniColors.css')}}" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @if(App::isLocal())
        <script src="{{ URL::asset('js/jquery-2-1.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap.min2.js') }}"></script>
        <script src="{{ URL::asset('js/angular.js') }}"></script>
        <script src="{{ URL::asset('js/angular-locale_fa-ir.js') }}"></script>
        <script type="text/javascript" src="{{asset('js/fabric.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/caseEditor.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/tshirtEditor.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/jquery.miniColors.min.js')}}"></script>
        <!-- Le styles -->

    @else
        <script src="http://malsup.github.com/jquery.form.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.3/i18n/angular-locale_fa-ir.js"></script>
    @endif
</head>
<body><body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    @yield('script');
</body>
</html>
