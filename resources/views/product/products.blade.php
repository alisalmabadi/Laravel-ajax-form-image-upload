@extends('master')
@section('head')
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('scripts')
    <!-- The plugin itself - required -->

   {{-- <script src="{{ asset('new-assets/js/jss/products.js') }}"></script>--}}

    <!-- HTML5 canvas library - required -->

@endsection
@section('title', 'مدیریت محصولات ')
@section('main')

    <div class="container site-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-offset-1 col-sm-10" style="background: white;">
                    <section class="panel">
                        <div class="panel-heading">طراحی محصول</div>

                        <div class="panel-body" id="panel-koli">
                                <h3 id="clothing">Clothing Designer</h3>
                                <div id="clothing-designer" class="fpd-shadow-1">
                                    <div class="fpd-product" title="Shirt Front" data-thumbnail="images/yellow_shirt/front/preview.png">
                                        <img src="{{asset('new-assets/images/yellow_shirt/front/base.png')}}" title="Base" data-parameters='{"x": 325, "y": 329, "colors": "#d59211", "price": 20}' />
                                        <img src="{{asset('new-assets/images/yellow_shirt/front/shadows.png')}}" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
                                        <img src="{{asset('new-assets/images/yellow_shirt/front/body.png')}}" title="Hightlights" data-parameters='{"x": 322, "y": 137}' />
                                        <span title="Any Text" data-parameters='{"boundingBox": "Base", "x": 326, "y": 232, "zChangeable": true, "removable": true, "draggable": true, "rotatable": true, "resizable": true, "colors": "#000000"}' >Default Text</span>
                                        <div class="fpd-product" title="Shirt Back" data-thumbnail="images/yellow_shirt/back/preview.png">
                                            <img src="{{asset('new-assets/images/yellow_shirt/back/base.png')}}" title="Base" data-parameters='{"x": 317, "y": 329, "colors": "Base", "price": 20}' />
                                            <img src="{{asset('new-assets/images/yellow_shirt/back/body.png')}}" title="Hightlights" data-parameters='{"x": 333, "y": 119}' />
                                            <img src="{{asset('new-assets/images/yellow_shirt/back/shadows.png')}}" title="Shadow" data-parameters='{"x": 318, "y": 329}' />
                                        </div>
                                    </div>
                                    <div class="fpd-product" title="Sweater" data-thumbnail="images/sweater/preview.png">
                                        <img src="{{asset('new-assets/images/sweater/basic.png')}}" title="Base" data-parameters='{"x": 332, "y": 311, "colors": "#D5D5D5,#990000,#cccccc", "price": 20}' />
                                        <img src="{{asset('new-assets/images/sweater/highlights.png')}}" title="Hightlights" data-parameters='{"x": 332, "y": 311}' />
                                        <img src="{{asset('new-assets/images/sweater/shadow.png')}}" title="Shadow" data-parameters='{"x": 332, "y": 309}' />
                                    </div>
                                    <div class="fpd-product" title="Scoop Tee" data-thumbnail="images/scoop_tee/preview.png">
                                        <img src="{{asset('new-assets/images/scoop_tee/basic.png')}}" title="Base" data-parameters='{"x": 314, "y": 323, "colors": "#98937f, #000000, #ffffff", "price": 15}' />
                                        <img src="{{asset('new-assets/images/scoop_tee/highlights.png')}}" title="Hightlights" data-parameters='{"x":308, "y": 316}' />
                                        <img src="{{asset('new-assets/images/scoop_tee/shadows.png')}}" title="Shadow" data-parameters='{"x": 308, "y": 316}' />
                                        <img src="{{asset('new-assets/images/scoop_tee/label.png')}}" title="Label" data-parameters='{"x": 314, "y": 140}' />
                                    </div>
                                    <div class="fpd-product" title="Hoodie" data-thumbnail="images/hoodie/preview.png">
                                        <img src="{{asset('new-assets/images/hoodie/basic.png')}}" title="Base" data-parameters='{"x": 313, "y": 322, "colors": "#850b0b", "price": 40}' />
                                        <img src="{{asset('new-assets/images/hoodie/highlights.png')}}" title="Hightlights" data-parameters='{"x": 311, "y": 318}' />
                                        <img src="{{asset('new-assets/images/hoodie/shadows.png')}}" title="Shadow" data-parameters='{"x": 311, "y": 321}' />
                                        <img src="{{asset('new-assetss/images/hoodie/zip.png')}}" title="Zip" data-parameters='{"x": 303, "y": 216}' />
                                    </div>
                                    <div class="fpd-product" title="Shirt" data-thumbnail="images/shirt/preview.png">
                                        <img src="{{asset('new-assets/images/shirt/basic.png')}}" title="Base" data-parameters='{"x": 327, "y": 313, "colors": "#6ebed5", "price": 10}' />
                                        <img src="{{asset('new-assets/images/shirt/collar_arms.png')}}" title="Collars & Arms" data-parameters='{"x": 326, "y": 217, "colors": "#000000"}' />
                                        <img src="{{asset('new-assets/images/shirt/highlights.png')}}" title="Hightlights" data-parameters='{"x": 330, "y": 313}' />
                                        <img src="{{asset('new-assets/images/shirt/shadow.png')}}" title="Shadow" data-parameters='{"x": 327, "y": 312}' />
                                        <span title="Any Text" data-parameters='{"boundingBox": "Base", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "colors": "#000000"}' >Default Text</span>
                                    </div>
                                    <div class="fpd-product" title="Short" data-thumbnail="images/shorts/preview.png">
                                        <img src="{{asset('new-assets/images/shorts/basic.png')}}" title="Base" data-parameters='{"x": 317, "y": 332, "colors": "#81b5eb", "price": 15}' />
                                        <img src="{{asset('new-assets/images/shorts/highlights.png')}}" title="Hightlights" data-parameters='{"x": 318, "y": 331}' />
                                        <img src="{{asset('new-assets/images/shorts/pullstrings.png')}}" title="Pullstrings" data-parameters='{"x": 307, "y": 195, "colors": "#ffffff"}' />
                                        <img src="{{asset('new-assets/images/shorts/midtones.png')}}" title="Midtones" data-parameters='{"x": 317, "y": 332}' />
                                        <img src="{{asset('new-assets/images/shorts/shadows.png')}}" title="Shadow" data-parameters='{"x": 320, "y": 331}' />
                                    </div>
                                    <div class="fpd-product" title="Basecap" data-thumbnail="images/cap/preview.png">
                                        <img src="{{asset('new-assets/images/cap/basic.png')}}" title="Base" data-parameters='{"x": 318, "y": 311, "colors": "#ededed", "price": 5}' />
                                        <img src="{{asset('new-assets/images/cap/highlights.png')}}" title="Hightlights" data-parameters='{"x": 309, "y": 300}' />
                                        <img src="{{asset('new-assets/images/cap/shadows.png')}}" title="Shadows" data-parameters='{"x": 306, "y": 299}' />
                                    </div>
                                    <div class="fpd-design">
                                        <div class="fpd-category" title="Swirls">
                                            <img src="{{asset('new-assets/images/designs/swirl.png')}}" title="Swirl" data-parameters='{"zChangeable": true, "x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 10, "boundingBox": "Base", "autoCenter": true}' />
                                            <img src="{{asset('new-assets/images/designs/swirl2.png')}}" title="Swirl 2" data-parameters='{"x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 5, "boundingBox": "Base", "autoCenter": true}' />
                                            <img src="{{asset('new-assets/images/designs/swirl3.png')}}" title="Swirl 3" data-parameters='{"x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "autoCenter": true}' />
                                            <img src="{{asset('new-assets/images/designs/heart_blur.png')}}" title="Heart Blur" data-parameters='{"x": 215, "y": 200, "colors": "#bf0200", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 5, "boundingBox": "Base", "autoCenter": true}' />
                                            <img src="{{asset('new-assets/images/designs/converse.png')}}" title="Converse" data-parameters='{"x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "autoCenter": true}' />
                                            <img src="{{asset('new-assets/images/designs/crown.png')}}" title="Crown" data-parameters='{"x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "autoCenter": true}' />
                                            <img src="{{asset('new-assets/images/designs/men_women.png')}}" title="Men hits Women" data-parameters='{"x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "boundingBox": "Base", "autoCenter": true}' />
                                        </div>
                                        <div class="fpd-category" title="Retro">
                                            <img src="{{asset('new-assets/images/designs/retro_1.png')}}" title="Retro One" data-parameters='{"x": 210, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "scale": 0.25, "price": 7, "boundingBox": "Base", "autoCenter": true}' />
                                            <img src="{{asset('new-assets/images/designs/retro_2.png')}}" title="Retro Two" data-parameters='{"x": 193, "y": 180, "colors": "#ffffff", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "scale": 0.46, "boundingBox": "Base", "autoCenter": true}' />
                                            <img src="{{asset('new-assets/images/designs/retro_3.png')}}" title="Retro Three" data-parameters='{"x": 240, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "scale": 0.25, "price": 8, "boundingBox": "Base", "autoCenter": true}' />
                                            <img src="{{asset('new-assets/images/designs/heart_circle.png')}}" title="Heart Circle" data-parameters='{"x": 240, "y": 200, "colors": "#007D41", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "scale": 0.4, "boundingBox": "Base", "autoCenter": true}' />
                                            <img src="{{asset('new-assets/images/designs/swirl.png')}}" title="Swirl" data-parameters='{"x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 10, "boundingBox": "Base", "autoCenter": true}' />
                                            <img src="{{asset('new-assets/images/designs/swirl2.png')}}" title="Swirl 2" data-parameters='{"x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 5, "boundingBox": "Base", "autoCenter": true}' />
                                            <img src="{{asset('new-assets/images/designs/swirl3.png')}}" title="Swirl 3" data-parameters='{"x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true}' />
                                        </div>
                                    </div>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="api-buttons col-md-7">
                                        <a href="#" id="print-button" class="btn btn-primary">چاپ</a>
                                        <a href="#" id="image-button" class="btn btn-primary">ساخت عکس</a>
                                        <a href="#" id="pdf-button" class="btn btn-primary">ساخت pdf</a>
                                        <a href="#" id="checkout-button" class="btn btn-success">سبد خرید</a>
                                        <a href="#" id="recreation-button" class="btn btn-success">نوسازی محصول</a>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="#" id="upload-button" class="btn btn-warning">آپلود طراحی شما</a>
                                        <label class="checkbox inline"><input type="checkbox" id="colorizable" />قابل رنگ آمیزی</label>
                                    </div>
                                    <div class="col-md-3">
                                        <span class="price badge badge-inverse"><span id="thsirt-price"></span> تومان</span>
                                    </div>
                                </div>

                                <button class="btn btn-info" id="save-image-php">آپلود عکس</button>
                                <button class="btn btn-info" id="send-image-mail-php">ارسال عکس با ایمیل!</button>

                                <!-- The form recreation -->
                                <input type="file" id="design-upload" style="display: none;" />
                                <form action="php/recreation.php" id="recreation-form" method="post">
                                    <input type="hidden" name="recreation_product" value="" />
                                </form>

                           <!-- </div>-->

                        </div>
                    </section>

                </div>
            </div>
        </div>

    </div>
@endsection