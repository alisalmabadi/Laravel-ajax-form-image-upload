<!DOCTYPE html>
<html>
<head>
    <title>jquery</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>طراحی محصول</title>

    <!-- Style sheets -->
    <link rel="stylesheet" type="text/css" href="{{asset('new-assets/fancy/bootstrap/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{ asset('new-assets/css/bootstrap-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('new-assets/css/bootstrap-rtl.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('new-assets/fancy/css/main.css')}}">

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

    <!-- Include js files -->
    <script src="{{asset('new-assets/fancy/js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('new-assets/fancy/js/jquery-ui.min.js')}}" type="text/javascript"></script>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <!-- HTML5 canvas library - required -->
    <script src="{{asset('new-assets/fancy/js/fabric.js')}}" type="text/javascript"></script>
    <!-- The plugin itself - required -->
    <script src="{{asset('new-assets/fancy/js/jquery.fancyProductDesigner.min.js')}}" type="text/javascript"></script>
<style>
    a#checkout-button {
        width: 100%;
    }
    .links {

        font-family: "IRANSansWeb_Light" !important;
    }
    #flipkart-navbar {
        background-color: #2874f0;
        color: #FFFFFF;
    }

    .row1{
        padding-top: 10px;
    }

    .row2 {
        padding-bottom: 20px;
    }

    .flipkart-navbar-input {
        padding: 11px 16px;
        border-radius: 2px 0 0 2px;
        border: 0 none;
        outline: 0 none;
        font-size: 15px;
    }

    .flipkart-navbar-button {
        background-color: #ffe11b;
        border: 1px solid #ffe11b;
        border-radius: 0 2px 2px 0;
        color: #565656;
        padding: 10px 0;
        height: 43px;
        cursor: pointer;
    }

    .cart-button {
        background-color: #2469d9;
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .23), inset 1px 1px 0 0 hsla(0, 0%, 100%, .2);
        padding: 10px 0;
        text-align: center;
        height: 41px;
        border-radius: 2px;
        font-weight: 500;
        width: 120px;
        display: inline-block;
        color: #FFFFFF;
        text-decoration: none;
        color: inherit;
        border: none;
        outline: none;
    }

    .cart-button:hover{
        text-decoration: none;
        color: #fff;
        cursor: pointer;
    }

    .cart-svg {
        display: inline-block;
        width: 16px;
        height: 16px;
        vertical-align: middle;
        margin-right: 8px;
    }

    .item-number {
        border-radius: 3px;
        background-color: rgba(0, 0, 0, .1);
        height: 20px;
        padding: 3px 6px;
        font-weight: 500;
        display: inline-block;
        color: #fff;
        line-height: 12px;
        margin-left: 10px;
    }

    .upper-links {
        display: inline-block;
        padding: 0 11px;
        line-height: 23px;
        font-family: 'Roboto', sans-serif;
        letter-spacing: 0;
        color: inherit;
        border: none;
        outline: none;
        font-size: 12px;
    }

    .dropdown {
        position: relative;
        display: inline-block;
        margin-bottom: 0px;
    }

    .dropdown:hover {
        background-color: #fff;
    }

    .dropdown:hover .links {
        color: #000;
    }

    .dropdown:hover .dropdown-menu {
        display: block;
    }

    .dropdown .dropdown-menu {
        position: absolute;
        top: 100%;
        display: none;
        background-color: #fff;
        color: #333;
        left: 0px;
        border: 0;
        border-radius: 0;
        box-shadow: 0 4px 8px -3px #555454;
        margin: 0;
        padding: 0px;
    }

    .links {
        color: #fff;
        text-decoration: none;
    }

    .links:hover {
        color: #fff;
        text-decoration: none;
    }

    .profile-links {
        font-size: 12px;
        font-family: 'Roboto', sans-serif;
        border-bottom: 1px solid #e9e9e9;
        box-sizing: border-box;
        display: block;
        padding: 0 11px;
        line-height: 23px;
    }

    .profile-li{
        padding-top: 2px;
    }
    .profile-li a {
        font-family: "IRANSansWeb_Light";
    }

    .largenav {
        display: none;
    }

    .smallnav{
        display: block;
    }

    .smallsearch{
        margin-left: 15px;
        margin-top: 15px;
    }

    .menu{
        cursor: pointer;
    }

    @media screen and (min-width: 768px) {
        .largenav {
            display: block;
        }
        .smallnav{
            display: none;
        }
        .smallsearch{
            margin: 0px;
        }
    }

    /*Sidenav*/
    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #fff;
        overflow-x: hidden;
        transition: 0.5s;
        box-shadow: 0 4px 8px -3px #555454;
        padding-top: 0px;
    }

    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s
    }

    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
        color: #fff;
    }

    @media screen and (max-height: 450px) {
        .sidenav a {font-size: 18px;}
    }

    .sidenav-heading{
        font-size: 36px;
        color: #fff;
    }
</style>


    <script type="text/javascript">
        /*$(document).ready(function () {
            $('#download').css('style','');

        })*/
        function openNav() {
            document.getElementById("mySidenav").style.width = "70%";
            // document.getElementById("flipkart-navbar").style.width = "50%";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.body.style.backgroundColor = "rgba(0,0,0,0)";
        }
        jQuery(document).ready(function(){
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

           /* //create an image
            $('#image').click(function(){
                var image = yourDesigner.createImage();
                return false;
            });
*/
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
                $.post("../public/saveproduct", {base64_image: yourDesigner.getProductDataURL(),'_token': $('meta[name=csrf-token]').attr('content')},function (data) {
                    $('.results').html(data);
                });
            });

            /*//send image via mail
            $('#send-image-mail-php').click(function() {
                $.post( "php/send_image_via_mail.php", { base64_image: yourDesigner.getProductDataURL()} );
            });*/

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
<div id="flipkart-navbar">
    <div class="container">
        <div class="row row1">
            <ul class="largenav pull-right">
                <li class="upper-links"><a class="links" href="#">خانه</a></li>
                <li class="upper-links"><a class="links" href="https://campusbox.org/">درباره ما</a></li>
                <li class="upper-links"><a class="links" href="#">سفارش</a></li>
                <li class="upper-links"><a class="links" href="#">اعضای تیم</a></li>
                <li class="upper-links"><a class="links" href="#">ارتباط با ما</a></li>
                {{--
                                <li class="upper-links"><a class="links" href="#"></a></li>
                --}}
                <li class="upper-links">
                    <a class="links" href="#">
                        <svg class="" width="16px" height="12px" style="overflow: visible;">
                            <path d="M8.037 17.546c1.487 0 2.417-.93 2.417-2.417H5.62c0 1.486.93 2.415 2.417 2.415m5.315-6.463v-2.97h-.005c-.044-3.266-1.67-5.46-4.337-5.98v-.81C9.01.622 8.436.05 7.735.05 7.033.05 6.46.624 6.46 1.325v.808c-2.667.52-4.294 2.716-4.338 5.98h-.005v2.972l-1.843 1.42v1.376h14.92v-1.375l-1.842-1.42z" fill="#fff"></path>
                        </svg>
                    </a>
                </li>
                <li class="upper-links dropdown"><a class="links" href="#">دسته بندی محصولات</a>
                    <ul class="dropdown-menu">
                        <li class="profile-li"><a class="profile-links" href="http://yazilife.com/">دست بند</a></li>
                        <li class="profile-li"><a class="profile-links" href="http://hacksociety.tech/">لباس</a></li>
                        <li class="profile-li"><a class="profile-links" href="#">ماشین ابزار</a></li>
                        <li class="profile-li"><a class="profile-links" href="#">وسایل بهداشتی</a></li>
                        <li class="profile-li"><a class="profile-links" href="#">مبایل</a></li>
                        <li class="profile-li"><a class="profile-links" href="#">لپتاپ</a></li>
                        {{--
                                                <li class="profile-li"><a class="profile-links" href="#">Link</a></li>
                        --}}
                    </ul>
                </li>
            </ul>
        </div>
        <div class="row row2">
            <div class="col-sm-2">
                <h2 style="margin:0px;"><span class="smallnav menu" onclick="openNav()">☰ دیجی کالا</span></h2>
                <h1 style="margin:0px;"><span class="largenav">دیجی کالا</span></h1>
            </div>
            <div class="flipkart-navbar-search smallsearch col-sm-8 col-xs-11">
                <div class="row">
                    <input class="flipkart-navbar-input col-xs-11" type="" placeholder="به دنبال برند ها و محصولات مختلف بگرد!..." name="">
                    <button class="flipkart-navbar-button col-xs-1">
                        <svg width="15px" height="15px">
                            <path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 "></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="cart largenav col-sm-2">
                <a class="cart-button">
                    <svg class="cart-svg " width="16 " height="16 " viewBox="0 0 16 16 ">
                        <path d="M15.32 2.405H4.887C3 2.405 2.46.805 2.46.805L2.257.21C2.208.085 2.083 0 1.946 0H.336C.1 0-.064.24.024.46l.644 1.945L3.11 9.767c.047.137.175.23.32.23h8.418l-.493 1.958H3.768l.002.003c-.017 0-.033-.003-.05-.003-1.06 0-1.92.86-1.92 1.92s.86 1.92 1.92 1.92c.99 0 1.805-.75 1.91-1.712l5.55.076c.12.922.91 1.636 1.867 1.636 1.04 0 1.885-.844 1.885-1.885 0-.866-.584-1.593-1.38-1.814l2.423-8.832c.12-.433-.206-.86-.655-.86 " fill="#fff "></path>
                    </svg> سبد خرید
                    <span class="item-number ">0</span>
                </a>
            </div>
        </div>
    </div>
</div>
<div id="mySidenav" class="sidenav">
    <div class="container" style="background-color: #2874f0; padding-top: 10px;">
        <span class="sidenav-heading">خانه</span>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    </div>
    <a href="#">درباره شرکت</a>
    <a href="#">خرید</a>
    <a href="#">ارتباط با ما</a>
    <a href="#">تماس با ما</a>
</div>

<div class="results"></div>


<div class="container site-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-offset-1 col-sm-10" style="background: white;">
                <section class="panel">
                   {{-- <div class="panel-heading">طراحی محصول</div>--}}

                    <div class="panel-body">
                        <div class="panel-heading">
                            <h3 id="clothing">طراحی محصول</h3>
                        </div>
                        <div id="clothing-designer" class="fpd-shadow-1">
                            <div class="panel-body">
                                <div class="btn-group btn-group-justified">
                                    <a class="btn btn-success fpd-download-image" href="#">دانلود عکس</a>
                                    <a class="btn btn-info fpd-save-pdf" href="#">دانلود pdf</a>
                                    <a class="btn btn-danger fpd-print" href="#">پرینت</a>
                                </div>
                            </div>
                            <div class="fpd-product" title="دستبند نوع یک" data-thumbnail="images/dastband1/b1.png">
                                <img src="{{asset('images/dastband1/b1.png')}}" title="Base" data-parameters='{"x": 317, "y": 332, "colors": "#81b5eb", "price": 15}' />
                                {{-- <img src="{{asset('new-assets/fancy/images/dastband1/b1.jpg')}}" title="Hightlights" data-parameters='{"x": 318, "y": 331}' />
                                 <img src="{{asset('new-assets/fancy/images/dastband1/b1.jpg')}}" title="Pullstrings" data-parameters='{"x": 307, "y": 195, "colors": "#ffffff"}' />
                                 <img src="{{asset('new-assets/fancy/images/dastband1/b1.jpg')}}" title="Midtones" data-parameters='{"x": 317, "y": 332}' />
                                 <img src="{{asset('new-assets/fancy/images/dastband1/b1.jpg')}}" title="Shadow" data-parameters='{"x": 320, "y": 331}' />--}}
                            </div>
                            <div class="fpd-product" title="دستبند نوع دو" data-thumbnail="images/dastband2/b2.png">
                                <img src="{{asset('images/dastband2/b2.png')}}" title="Base" data-parameters='{"x": 317, "y": 332, "colors": "#81b5eb", "price": 15}' />
                                {{-- <img src="{{asset('new-assets/fancy/images/dastband1/b1.jpg')}}" title="Hightlights" data-parameters='{"x": 318, "y": 331}' />
                                 <img src="{{asset('new-assets/fancy/images/dastband1/b1.jpg')}}" title="Pullstrings" data-parameters='{"x": 307, "y": 195, "colors": "#ffffff"}' />
                                 <img src="{{asset('new-assets/fancy/images/dastband1/b1.jpg')}}" title="Midtones" data-parameters='{"x": 317, "y": 332}' />
                                 <img src="{{asset('new-assets/fancy/images/dastband1/b1.jpg')}}" title="Shadow" data-parameters='{"x": 320, "y": 331}' />--}}
                            </div>
                            <div class="fpd-product" title="دستبند نوع سه" data-thumbnail="images/dastband3/b3.png">
                                <img src="{{asset('images/dastband3/b3.png')}}" title="Base" data-parameters='{"x": 317, "y": 332, "colors": "#81b5eb", "price": 15}' />
                                {{-- <img src="{{asset('new-assets/fancy/images/dastband1/b1.jpg')}}" title="Hightlights" data-parameters='{"x": 318, "y": 331}' />
                                 <img src="{{asset('new-assets/fancy/images/dastband1/b1.jpg')}}" title="Pullstrings" data-parameters='{"x": 307, "y": 195, "colors": "#ffffff"}' />
                                 <img src="{{asset('new-assets/fancy/images/dastband1/b1.jpg')}}" title="Midtones" data-parameters='{"x": 317, "y": 332}' />
                                 <img src="{{asset('new-assets/fancy/images/dastband1/b1.jpg')}}" title="Shadow" data-parameters='{"x": 320, "y": 331}' />--}}
                            </div>
                            <div class="fpd-product" title="دستبند نوع چهار" data-thumbnail="images/dastband4/b4.png">
                                <img src="{{asset('images/dastband4/b4.png')}}" title="Base" data-parameters='{"x": 317, "y": 332, "colors": "#81b5eb", "price": 15}' />
                                {{-- <img src="{{asset('new-assets/fancy/images/dastband1/b1.jpg')}}" title="Hightlights" data-parameters='{"x": 318, "y": 331}' />
                                 <img src="{{asset('new-assets/fancy/images/dastband1/b1.jpg')}}" title="Pullstrings" data-parameters='{"x": 307, "y": 195, "colors": "#ffffff"}' />
                                 <img src="{{asset('new-assets/fancy/images/dastband1/b1.jpg')}}" title="Midtones" data-parameters='{"x": 317, "y": 332}' />
                                 <img src="{{asset('new-assets/fancy/images/dastband1/b1.jpg')}}" title="Shadow" data-parameters='{"x": 320, "y": 331}' />--}}
                            </div>
                            <div class="fpd-product" title="دستبند نوع پنج" data-thumbnail="images/dastband5/b5.png">
                                <img src="{{asset('images/dastband5/b5.png')}}" title="Base" data-parameters='{"x": 317, "y": 332, "colors": "#81b5eb", "price": 15}' />
                                {{-- <img src="{{asset('new-assets/fancy/images/dastband1/b1.jpg')}}" title="Hightlights" data-parameters='{"x": 318, "y": 331}' />
                                 <img src="{{asset('new-assets/fancy/images/dastband1/b1.jpg')}}" title="Pullstrings" data-parameters='{"x": 307, "y": 195, "colors": "#ffffff"}' />
                                 <img src="{{asset('new-assets/fancy/images/dastband1/b1.jpg')}}" title="Midtones" data-parameters='{"x": 317, "y": 332}' />
                                 <img src="{{asset('new-assets/fancy/images/dastband1/b1.jpg')}}" title="Shadow" data-parameters='{"x": 320, "y": 331}' />--}}
                            </div>
                            <div class="fpd-product" title="دستبند نوع شش" data-thumbnail="images/dastband6/b6.png">
                                <img src="{{asset('images/dastband6/b6.png')}}" title="Base" data-parameters='{"x": 317, "y": 332, "colors": "#81b5eb", "price": 15}' />
                                {{-- <img src="{{asset('new-assets/fancy/images/dastband1/b1.jpg')}}" title="Hightlights" data-parameters='{"x": 318, "y": 331}' />
                                 <img src="{{asset('new-assets/fancy/images/dastband1/b1.jpg')}}" title="Pullstrings" data-parameters='{"x": 307, "y": 195, "colors": "#ffffff"}' />
                                 <img src="{{asset('new-assets/fancy/images/dastband1/b1.jpg')}}" title="Midtones" data-parameters='{"x": 317, "y": 332}' />
                                 <img src="{{asset('new-assets/fancy/images/dastband1/b1.jpg')}}" title="Shadow" data-parameters='{"x": 320, "y": 331}' />--}}
                            </div>
                            {{--
                            <div class="fpd-product" title="Shirt Front" data-thumbnail="images/yellow_shirt/front/preview.png">
                                <img src="{{asset('new-assets/fancy/images/yellow_shirt/front/base.png')}}" title="Base" data-parameters='{"x": 325, "y": 329, "colors": "#d59211", "price": 20}' />
                                <img src="{{asset('new-assets/fancy/images/yellow_shirt/front/shadows.png')}}" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
                                <img src="{{asset('new-assets/fancy/images/yellow_shirt/front/body.png')}}" title="Hightlights" data-parameters='{"x": 322, "y": 137}' />
                                <span title="Any Text" data-parameters='{"boundingBox": "Base", "x": 326, "y": 232, "zChangeable": true, "removable": true, "draggable": true, "rotatable": true, "resizable": true, "colors": "#000000"}' >Default Text</span>
                                <div class="fpd-product" title="Shirt Back" data-thumbnail="images/yellow_shirt/back/preview.png">
                                    <img src="{{asset('new-assets/fancy/images/yellow_shirt/back/base.png')}}" title="Base" data-parameters='{"x": 317, "y": 329, "colors": "Base", "price": 20}' />
                                    <img src="{{asset('new-assets/fancy/images/yellow_shirt/back/body.png')}}" title="Hightlights" data-parameters='{"x": 333, "y": 119}' />
                                    <img src="{{asset('new-assets/fancy/images/yellow_shirt/back/shadows.png')}}" title="Shadow" data-parameters='{"x": 318, "y": 329}' />
                                </div>
                            </div>--}}
                           {{-- <div class="fpd-product" title="Sweater" data-thumbnail="images/sweater/preview.png">
                                <img src="{{asset('new-assets/fancy/images/sweater/basic.png')}}" title="Base" data-parameters='{"x": 332, "y": 311, "colors": "#D5D5D5,#990000,#cccccc", "price": 20}' />
                                <img src="{{asset('new-assets/fancy/images/sweater/highlights.png')}}" title="Hightlights" data-parameters='{"x": 332, "y": 311}' />
                                <img src="{{asset('new-assets/fancy/images/sweater/shadow.png')}}" title="Shadow" data-parameters='{"x": 332, "y": 309}' />
                            </div>
                            <div class="fpd-product" title="Scoop Tee" data-thumbnail="images/scoop_tee/preview.png">
                                <img src="{{asset('new-assets/fancy/images/scoop_tee/basic.png')}}" title="Base" data-parameters='{"x": 314, "y": 323, "colors": "#98937f, #000000, #ffffff", "price": 15}' />
                                <img src="{{asset('new-assets/fancy/images/scoop_tee/highlights.png')}}" title="Hightlights" data-parameters='{"x":308, "y": 316}' />
                                <img src="{{asset('new-assets/fancy/images/scoop_tee/shadows.png')}}" title="Shadow" data-parameters='{"x": 308, "y": 316}' />
                                <img src="{{asset('new-assets/fancy/images/scoop_tee/label.png')}}" title="Label" data-parameters='{"x": 314, "y": 140}' />
                            </div>
                            <div class="fpd-product" title="Hoodie" data-thumbnail="images/hoodie/preview.png">
                                <img src="{{asset('new-assets/fancy/images/hoodie/basic.png')}}" title="Base" data-parameters='{"x": 313, "y": 322, "colors": "#850b0b", "price": 40}' />
                                <img src="{{asset('new-assets/fancy/images/hoodie/highlights.png')}}" title="Hightlights" data-parameters='{"x": 311, "y": 318}' />
                                <img src="{{asset('new-assets/fancy/images/hoodie/shadows.png')}}" title="Shadow" data-parameters='{"x": 311, "y": 321}' />
                                <img src="{{asset('new-assets/fancys/images/hoodie/zip.png')}}" title="Zip" data-parameters='{"x": 303, "y": 216}' />
                            </div>
                            <div class="fpd-product" title="Shirt" data-thumbnail="images/shirt/preview.png">
                                <img src="{{asset('new-assets/fancy/images/shirt/basic.png')}}" title="Base" data-parameters='{"x": 327, "y": 313, "colors": "#6ebed5", "price": 10}' />
                                <img src="{{asset('new-assets/fancy/images/shirt/collar_arms.png')}}" title="Collars & Arms" data-parameters='{"x": 326, "y": 217, "colors": "#000000"}' />
                                <img src="{{asset('new-assets/fancy/images/shirt/highlights.png')}}" title="Hightlights" data-parameters='{"x": 330, "y": 313}' />
                                <img src="{{asset('new-assets/fancy/images/shirt/shadow.png')}}" title="Shadow" data-parameters='{"x": 327, "y": 312}' />
                                <span title="Any Text" data-parameters='{"boundingBox": "Base", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "colors": "#000000"}' >Default Text</span>
                            </div>
                            <div class="fpd-product" title="Short" data-thumbnail="images/shorts/preview.png">
                                <img src="{{asset('new-assets/fancy/images/shorts/basic.png')}}" title="Base" data-parameters='{"x": 317, "y": 332, "colors": "#81b5eb", "price": 300}' />
                                <img src="{{asset('new-assets/fancy/images/shorts/highlights.png')}}" title="Hightlights" data-parameters='{"x": 318, "y": 331}' />
                                <img src="{{asset('new-assets/fancy/images/shorts/pullstrings.png')}}" title="Pullstrings" data-parameters='{"x": 307, "y": 195, "colors": "#ffffff"}' />
                                <img src="{{asset('new-assets/fancy/images/shorts/midtones.png')}}" title="Midtones" data-parameters='{"x": 317, "y": 332}' />
                                <img src="{{asset('new-assets/fancy/images/shorts/shadows.png')}}" title="Shadow" data-parameters='{"x": 320, "y": 331}' />
                            </div>--}}



                          {{--  <div class="fpd-product" title="Basecap" data-thumbnail="images/cap/preview.png">
                                <img src="{{asset('new-assets/fancy/images/cap/basic.png')}}" title="Base" data-parameters='{"x": 318, "y": 311, "colors": "#ededed", "price": 5}' />
                                <img src="{{asset('new-assets/fancy/images/cap/highlights.png')}}" title="Hightlights" data-parameters='{"x": 309, "y": 300}' />
                                <img src="{{asset('new-assets/fancy/images/cap/shadows.png')}}" title="Shadows" data-parameters='{"x": 306, "y": 299}' />
                            </div>--}}
                            <div class="fpd-design">
                         {{--       <div class="fpd-category" title="Swirls">
                                    <img src="{{asset('new-assets/fancy/images/designs/swirl.png')}}" title="Swirl" data-parameters='{"zChangeable": true, "x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 10, "boundingBox": "Base", "autoCenter": true}' />
                                    <img src="{{asset('new-assets/fancy/images/designs/swirl2.png')}}" title="Swirl 2" data-parameters='{"x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 5, "boundingBox": "Base", "autoCenter": true}' />
                                    <img src="{{asset('new-assets/fancy/images/designs/swirl3.png')}}" title="Swirl 3" data-parameters='{"x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "autoCenter": true}' />
                                    <img src="{{asset('new-assets/fancy/images/designs/heart_blur.png')}}" title="Heart Blur" data-parameters='{"x": 215, "y": 200, "colors": "#bf0200", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 5, "boundingBox": "Base", "autoCenter": true}' />
                                    <img src="{{asset('new-assets/fancy/images/designs/converse.png')}}" title="Converse" data-parameters='{"x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "autoCenter": true}' />
                                    <img src="{{asset('new-assets/fancy/images/designs/crown.png')}}" title="Crown" data-parameters='{"x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "autoCenter": true}' />
                                    <img src="{{asset('new-assets/fancy/images/designs/men_women.png')}}" title="Men hits Women" data-parameters='{"x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "boundingBox": "Base", "autoCenter": true}' />
                                </div>
                                <div class="fpd-category" title="Retro">
                                    <img src="{{asset('new-assets/fancy/images/designs/retro_1.png')}}" title="Retro One" data-parameters='{"x": 210, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "scale": 0.25, "price": 7, "boundingBox": "Base", "autoCenter": true}' />
                                    <img src="{{asset('new-assets/fancy/images/designs/retro_2.png')}}" title="Retro Two" data-parameters='{"x": 193, "y": 180, "colors": "#ffffff", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "scale": 0.46, "boundingBox": "Base", "autoCenter": true}' />
                                    <img src="{{asset('new-assets/fancy/images/designs/retro_3.png')}}" title="Retro Three" data-parameters='{"x": 240, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "scale": 0.25, "price": 8, "boundingBox": "Base", "autoCenter": true}' />
                                    <img src="{{asset('new-assets/fancy/images/designs/heart_circle.png')}}" title="Heart Circle" data-parameters='{"x": 240, "y": 200, "colors": "#007D41", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "scale": 0.4, "boundingBox": "Base", "autoCenter": true}' />
                                    <img src="{{asset('new-assets/fancy/images/designs/swirl.png')}}" title="Swirl" data-parameters='{"x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 10, "boundingBox": "Base", "autoCenter": true}' />
                                    <img src="{{asset('new-assets/fancy/images/designs/swirl2.png')}}" title="Swirl 2" data-parameters='{"x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 5, "boundingBox": "Base", "autoCenter": true}' />
                                    <img src="{{asset('new-assets/fancy/images/designs/swirl3.png')}}" title="Swirl 3" data-parameters='{"x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true}' />
                                </div>--}}
                                <div class="fpd-category" title="طرح های اسلیمی طلایی">
                                    <img src="{{asset('images/designs/talaee/1.png')}}" title=" زینت آرش 1" data-parameters='{"x": 210, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "scale": 0.25, "price": 7, "boundingBox": "Base", "autoCenter": true}' />
                                    <img src="{{asset('images/designs/talaee/2.png')}}" title=" زینت آرش 2" data-parameters='{"x": 193, "y": 180, "colors": "#ffffff", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "scale": 0.46, "boundingBox": "Base", "autoCenter": true}' />
                                    <img src="{{asset('images/designs/talaee/3.png')}}" title=" زینت آرش 3" data-parameters='{"x": 240, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "scale": 0.25, "price": 8, "boundingBox": "Base", "autoCenter": true}' />
                                    <img src="{{asset('images/designs/talaee/4.png')}}" title=" زینت آرش 4" data-parameters='{"x": 240, "y": 200, "colors": "#007D41", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "scale": 0.4, "boundingBox": "Base", "autoCenter": true}' />
                                    <img src="{{asset('images/designs/talaee/5.png')}}" title=" زینت آرش 5" data-parameters='{"x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 10, "boundingBox": "Base", "autoCenter": true}' />
                                    <img src="{{asset('images/designs/talaee/6.png')}}" title=" زینت آرش 6" data-parameters='{"x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 5, "boundingBox": "Base", "autoCenter": true}' />
                                    <img src="{{asset('images/designs/talaee/7.png')}}" title="نیما ساغر 1" data-parameters='{"x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true}' />
                                    <img src="{{asset('images/designs/talaee/8.png')}}" title="نیما ساغر 2" data-parameters='{"x": 240, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "scale": 0.25, "price": 8, "boundingBox": "Base", "autoCenter": true}' />
                                    <img src="{{asset('images/designs/talaee/9.png')}}" title="نیما ساغر 3" data-parameters='{"x": 240, "y": 200, "colors": "#007D41", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "scale": 0.4, "boundingBox": "Base", "autoCenter": true}' />
                                    <img src="{{asset('images/designs/talaee/10.png')}}" title="نیما ساغر 4" data-parameters='{"x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 10, "boundingBox": "Base", "autoCenter": true}' />
                                    <img src="{{asset('images/designs/talaee/11.png')}}" title="نیما ساغر 5" data-parameters='{"x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 5, "boundingBox": "Base", "autoCenter": true}' />
                                    <img src="{{asset('images/designs/talaee/12.png')}}" title="نیما ساغر 6" data-parameters='{"x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true}' />
                                </div>
                                <div class="fpd-category" title="طرح های اسلیمی نقره ای">
                                    <img src="{{asset('images/designs/1.png')}}" title=" زینت آرش 1" data-parameters='{"x": 210, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "scale": 0.25, "price": 7, "boundingBox": "Base", "autoCenter": true}' />
                                    <img src="{{asset('images/designs/2.png')}}" title=" زینت آرش 2" data-parameters='{"x": 193, "y": 180, "colors": "#ffffff", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "scale": 0.46, "boundingBox": "Base", "autoCenter": true}' />
                                    <img src="{{asset('images/designs/3.png')}}" title=" زینت آرش 3" data-parameters='{"x": 240, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "scale": 0.25, "price": 8, "boundingBox": "Base", "autoCenter": true}' />
                                    <img src="{{asset('images/designs/4.png')}}" title=" زینت آرش 4" data-parameters='{"x": 240, "y": 200, "colors": "#007D41", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "scale": 0.4, "boundingBox": "Base", "autoCenter": true}' />
                                    <img src="{{asset('images/designs/5.png')}}" title=" زینت آرش 5" data-parameters='{"x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 10, "boundingBox": "Base", "autoCenter": true}' />
                                    <img src="{{asset('images/designs/6.png')}}" title=" زینت آرش 6" data-parameters='{"x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 5, "boundingBox": "Base", "autoCenter": true}' />
                                    <img src="{{asset('images/designs/7.png')}}" title="نیما ساغر 1" data-parameters='{"x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true}' />
                                    <img src="{{asset('images/designs/8.png')}}" title="نیما ساغر 2" data-parameters='{"x": 240, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "scale": 0.25, "price": 8, "boundingBox": "Base", "autoCenter": true}' />
                                    <img src="{{asset('images/designs/9.png')}}" title="نیما ساغر 3" data-parameters='{"x": 240, "y": 200, "colors": "#007D41", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "scale": 0.4, "boundingBox": "Base", "autoCenter": true}' />
                                    <img src="{{asset('images/designs/10.png')}}" title="نیما ساغر 4" data-parameters='{"x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 10, "boundingBox": "Base", "autoCenter": true}' />
                                    <img src="{{asset('images/designs/11.png')}}" title="نیما ساغر 5" data-parameters='{"x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 5, "boundingBox": "Base", "autoCenter": true}' />
                                    <img src="{{asset('images/designs/12.png')}}" title="نیما ساغر 6" data-parameters='{"x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true}' />
                                </div>

                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="api-buttons col-md-10">
                                <a href="#" id="print-button" class="btn btn-primary">چاپ</a>
                                <a href="#" id="image-button" class="btn btn-primary">نمایش عکس نهایی</a>
                                <a href="#" id="pdf-button" class="btn btn-primary">ساخت pdf</a>
{{--
                                <a href="#" id="recreation-button" class="btn btn-success">نوسازی محصول</a>
--}}
                                <button class="btn btn-info" id="save-image-php">آپلود و ارسال به سرور</button>

                                <a href="#" id="upload-button" class="btn btn-warning">آپلود طراحی شما</a>
                            </div>

{{--
                                <label class="checkbox inline"><input type="checkbox" id="colorizable" />قابل رنگ آمیزی</label>
--}}

                            <div class="col-md-2">
                                <span class="price badge badge-inverse"><span id="thsirt-price"></span> تومان</span>
                            </div>
                        </div>

{{--
                        <button class="btn btn-info" id="send-image-mail-php">ارسال عکس با ایمیل!</button>
--}}
                        <!-- The form recreation -->
                        <input type="file" id="design-upload" style="display: none;" />
                        <form action="php/recreation.php" id="recreation-form" method="post">
                            <input type="hidden" name="recreation_product" value="" />
                        </form>

                        <!-- </div>-->

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#" id="checkout-button" class="btn btn-success">افزودن به سبد خرید</a>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>

</div>
</body>
</html>