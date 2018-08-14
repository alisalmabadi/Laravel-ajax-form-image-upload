<!DOCTYPE html>
<html lang="fa">
<head>
    <!-- Main -->
    <meta charset="UTF-8">
    <title>{{"فروشگاه اینترنتی"}} - @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{asset('new-assets/fancy/css/plugins.min.css')}}" />
    <!-- The CSS for the plugin itself - required -->
    <link rel="stylesheet" type="text/css" href="{{asset('new-assets/fancy/css/jquery.fancyProductDesigner.css')}}" />
    <!-- Optional - only when you would like to use custom fonts - optional -->
    <link rel="stylesheet" type="text/css" href="{{asset('new-assets/fancy/css/jquery.fancyProductDesigner-fonts.css')}}" />
    <link href="{{asset('new-assets/fancy/css/icon-font.css')}}" rel="stylesheet" />
    <!-- External plugins css - required -->
    <link href="{{asset('new-assets/fancy/css/jquery-ui.css')}}" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Gorditas' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('new-assets/fancy/bootstrap/css/bootstrap.css')}}" />
    <link rel="stylesheet" type="text/css" href="">

    <!-- Google Webfonts -->
    <link href='http://fonts.googleapis.com/css?family=Gorditas' rel='stylesheet' type='text/css'>
    <!-- jQuery UI - required -->
    <link href="{{asset('new-assets/fancy/css/jquery-ui.css')}}" rel="stylesheet" />
    <!-- Custom iconic font - required -->
    <link href="{{asset('new-assets/fancy/css/icon-font.css')}}" rel="stylesheet" />
    <!-- External plugins css - required -->
    <link rel="stylesheet" type="text/css" href="{{asset('new-assets/fancy/css/plugins.min.css')}}" />
    <!-- The CSS for the plugin itself - required -->
    <link rel="stylesheet" type="text/css" href="{{asset('new-assets/fancy/css/jquery.fancyProductDesigner.css')}}" />
    <!-- Optional - only when you would like to use custom fonts - optional -->

    <link rel="stylesheet" type="text/css" href="{{asset('new-assets/fancy/css/jquery.fancyProductDesigner-fonts.css')}}" />
    <link rel="stylesheet" href="{{ asset('new-assets/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('new-assets/css/master.css') }}">
    <link rel="icon" href="{{ asset('new-assets/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('new-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('new-assets/css/bootstrap-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('new-assets/css/bootstrap-rtl.min.css') }}">
{{--
    @if(App::isLocal())

        <link rel="stylesheet" href="{{ asset('new-assets/fancy/bootstrap/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('new-assets/css/bootstrap-theme.css') }}">
        <link rel="stylesheet" href="{{ asset('new-assets/css/bootstrap-rtl.min.css') }}">
    @else
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    @endif

@yield('head')
--}}
<!-- SEO -->
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <link rel="author" href="https://plus.google.com/106945145782595448252">
    <link rel="publisher" href="https://google.com/+GooglePlusPage">
    <!-- GooglePlus -->
    <meta itemprop="name" content="{{ 'تفروشگاه اینترنتی - ' }} - @yield('title')">
    <meta itemprop="description" content="@yield('description')">
    <meta itemprop="image" content="{{ asset('new-assets/img/logo.png') }}">
    <!-- Facebook -->
    <meta property="og:url" content="{{ Request::url() }}">
    <meta property="og:image" content="{{ asset('new-assets/img/logo.png') }}">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:title" content="{{ 'فروشگاه اینترنتی' }} - @yield('title')">
    <meta property="og:site_name" content=" - فروشگاه اینترنتی">
    <meta property="og:see_also" content="{{ Request::url() }}">
    <!-- Twitter -->
    <meta name="twitter:card" content="@yield('description')">
    <meta name="twitter:url" content="{{ Request::url() }}">
    <meta name="twitter:title" content="{{ 'فروشگاه اینترنتی'}} - @yield('title')">
    <meta name="twitter:description" content="@yield('description')">
    <meta name="twitter:image" content="{{ asset('new-assets/img/logo.png') }}">
    <!-- JS Bridges -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="url" content="{{ Request::url() }}">
    <!--End-->
    <script src="{{asset('new-assets/fancy/js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('new-assets/fancy/js/jquery-ui.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('new-assets/fancy/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{asset('new-assets/fancy/js/fabric.js')}}" type="text/javascript"></script>
    <script src="{{asset('new-assets/fancy/js/jquery.fancyProductDesigner.min.js')}}" type="text/javascript"></script>
{{--
    <script src="{{asset('new-assets/fancy/plugins.min.js')}}" type="text/javascript"></script>
--}}

    {{--
        <script src="{{asset('new-assets/fancy/js/FancyProductDesigner-all.min.js')}}" type="text/javascript"></script>

        {{--
            <script src="{{ asset('new-assets/fancy/bootstrap/js/bootstrap.min.js') }}"></script>
        --}}
    {{--  <script src="{{ asset('new-assets/js/angular.js') }}"></script>
      <script src="{{ asset('new-assets/js/angular-locale_fa-ir.js') }}"></script>--}}
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.3/i18n/angular-locale_fa-ir.js"></script>--}}
    {{--
    <script src="{{ asset('new-assets/js/auth/auth.js') }}"></script>
    --}}
<!-- The plugin itself - required -->
    <script type="text/javascript">
        $(document).ready(function(){
            var yourDesigner = $('#clothing-designer').fancyProductDesigner({
                editorMode: false,
                fonts: ['Arial', 'Fearless', 'Helvetica', 'Times New Roman', 'Verdana', 'Geneva', 'Gorditas'],
                customTextParameters: {
                    colors: false,
                    removable: true,
                    resizable: true,
                    draggable: true,
                    rotatable: true,
                    autoCenter: true,
                    boundingBox: "Base"
                },
                customImageParameters: {
                    draggable: true,
                    removable: true,
                    colors: '#000',
                    autoCenter: true,
                    boundingBox: "Base"
                }
            }).data('fancy-product-designer');

            //print button
            $('#print-button').click(function(){
                yourDesigner.print();
                return false;
            });

            //create an image
            $('#image-button').click(function(){
                var image = yourDesigner.createImage();
                return false;
            });

            //create a pdf with jsPDF
            $('#pdf-button').click(function(){
                var image = new Image();
                image.src = yourDesigner.getProductDataURL('jpeg', '#ffffff');
                image.onload = function() {
                    var doc = new jsPDF();
                    doc.addImage(this.src, 'JPEG', 0, 0, this.width * 0.2, this.height * 0.2);
                    doc.save('Product.pdf');
                }
                return false;
            });

            //checkout button with getProduct()
            $('#checkout-button').click(function(){
                var product = yourDesigner.getProduct();
                console.log(product);
                return false;
            });

            //event handler when the price is changing
            $('#clothing-designer')
                .bind('priceChange', function(evt, price, currentPrice) {
                    $('#thsirt-price').text(currentPrice);
                });
            //recreate button
            $('#recreation-button').click(function(){
                var fabricJSON = JSON.stringify(yourDesigner.getFabricJSON());
                $('#recreation-form input:first').val(fabricJSON).parent().submit();
                return false;
            });

            //click handler for input upload
            $('#upload-button').click(function(){
                $('#design-upload').click();
                return false;
            });

            //save image on webserver
            $('#save-image-php').click(function() {
                $.post( "#", { base64_image: yourDesigner.getProductDataURL()} );
            });

            //send image via mail
            $('#send-image-mail-php').click(function() {
                $.post( "#", { base64_image: yourDesigner.getProductDataURL()} );
            });

            //upload image
            document.getElementById('design-upload').onchange = function (e) {
                if(window.FileReader) {
                    var reader = new FileReader();
                    reader.readAsDataURL(e.target.files[0]);
                    reader.onload = function (e) {

                        var image = new Image;
                        image.src = e.target.result;
                        image.onload = function() {
                            var maxH = 400,
                                maxW = 300,
                                imageH = this.height,
                                imageW = this.width,
                                scaling = 1;

                            if(imageW > imageH) {
                                if(imageW > maxW) { scaling = maxW / imageW; }
                            }
                            else {
                                if(imageH > maxH) { scaling = maxH / imageH; }
                            }

                            yourDesigner.addElement('image', e.target.result, 'my custom design', {colors: $('#colorizable').is(':checked') ? '#000000' : false, zChangeable: true, removable: true, draggable: true, resizable: true, rotatable: true, autoCenter: true, boundingBox: "Base", scale: scaling});
                        };
                    };
                }
                else {
                    alert('FileReader API is not supported in your browser, please use Firefox, Safari, Chrome or IE10!')
                }
            };
        });
        </script>
</head>
<body>

<!-- Nav -->
<nav class="navigator navbar-fixed-top" role="navigation">
    <div  class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">منو بار</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a  class="navbar-brand" href="#">
                <img src="{{asset('new-assets/img/logo24.png')}}">
                <a class="logo" style="margin-left: 100px" href="{{url('/')}}">فروشگاه اینترنتی</a>
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li ><a class="header" href="{{url('/')}}">خانه <span class="sr-only">(current)</span></a></li>
                <li><a class="header" href="{{url('/contact')}}">ارتباط با ما</a></li>
                <li><a class="header">...</a></li>
            </ul>
            <form method="post" action="{{url('/search')}}" class="navbar-form navbar-left">
                <div class="form-group">
                    <input name="search-name" type="text" class="form-control" placeholder="جستجوی محصول">
                </div>
                <input hidden name="_token" value="{{csrf_token()}}">
                <input type="submit" class="btn btn-info" value="جستجو">
                <a href="{{url('/basket')}}" class="btn btn-warning num"><img class="img-count" src="{{asset('new-assets/img/shop-basket.png')}}"><span class="count">{{count(session('ids'))}}</span></a>
                <a>خوش آمدید،</a><a class="header">{{Auth::user()->name}}</a>
                {{-- @if (Auth::user()->Privilege()->find(1)!=null ||Auth::user()->Privilege()->find(2)!=null||Auth::user()->Privilege()->find(3)!=null||Auth::user()->Privilege()->find(4)!=null)
                 <a href="{{url('/panel')}}" class="btn btn-info">پنل مدیریت</a>
                 @endif--}}
            </form>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<section class="container">
    <main class="col-md-9 container-fluid main">
        @yield('main')
    </main>
    {{--<main class="col-md-3 container-fluid main">--}}
    {{--@yield('sidebar')--}}
    {{--</main>--}}
</section>
{{--
<footer class="footer navbar-fixed-bottom">
    <div class="container">
        <div class="col-md-6 center-xs center-sm">
            <span>پیگرد قانونی دارد!</span>
        </div>
        <hr class="hidden-md hidden-lg">
        <div class="col-md-6 text-left center-xs center-sm">
            <a href="/" class="hidden-xs">خانه</a>
            <span class="hidden-xs">|</span>
            <a href="/guide">راهنما</a>
            <span>|</span>
            <a href="/publicity">تبلیغات</a>
            <span>|</span>
            <a href="/rules">قوانین</a>
            <span>|</span>
            <a href="/about">درباره</a>
            <span>|</span>
            <a href="{{url('/relevance')}}">ارتباط</a>
        </div>
    </div>
</footer>--}}
<!-- The End -->
<!-- Scripts -->



</body>

</html>