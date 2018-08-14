@extends('layouts.app')
@section('script')
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <script type="application/javascript">
        $(document).ready(function () {

            $('.upload').on('change', function(){ //on file input change
                if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
                {
                    $('#thumb-output').html(''); //clear html of output element
                    var data = $(this)[0].files; //this file data

                    $.each(data, function(index, file){ //loop though each file
                        if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                            var fRead = new FileReader(); //new filereader
                            fRead.onload = (function(file){ //trigger function on successful read
                                return function(e) {
                                    var img = $('<img/>').addClass('thumb').attr('src', e.target.result);
                                    $('#thumb-output').append(img); //append image to output element
                                };
                            })(file);
                            fRead.readAsDataURL(file); //URL representing the file's data.
                        }
                    });

                }else{
                    alert("Your browser doesn't support File API!"); //if File API is absent
                }
            });

            $('#myForm').ajaxForm({
                beforeSend:function(){
                    $(".progress").show();
                    $('.panel-heading').show();
                    $('.khat').show();
                },
                uploadProgress:function(event,position,total,percentComplete){
                    $(".progress-bar").width(percentComplete+'%'); //dynamicaly change the progress bar width
                    $(".sr-only").html(percentComplete+'%'); // show the percentage number
                },
                success:function(){
                    $(".progress").hide();


                },
                complete:function(response){
                    if(response.responseText=='0')
                        $("#result").html("Error"); //display error if response is 0
                    else
                        $("#result").html("<img class='image-res' src='"+response.responseText+"' width='100%'/>");
                       $("#resam").html("<img id='phone' src='"+response.responseText+"' width='100%'/>");
               // <img id="phone" src="http://laravel/public/images/image-27288963.png">

                }
            });

            $(".progress").hide();
        });

    </script>


@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">پیش نمایش/آپلود تصویر</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                            <div class="col-lg-12">
                                <section class="panel">

                                    <div class="panel-body">
                                        <form action="{{route('product-add')}}" class="form-horizontal" id="myForm" method="post" enctype="multipart/form-data">
                                            <div class="form" style="height: 600px;">
                                                {{csrf_field()}}
                                                <label for="title" class="col-sm-1 control-label">عنوان تصویر</label>
                                                <div class="col-sm-10">

                                                    <input name="title" type="text" class="form-control">
                                                    <span class="help-block">عنوانی مختصر جهت نمایش پیام برای کاربر بنویسید.</span>
                                                </div>

                                                <label class="col-sm-2 control-label">عکس را انتخاب کنید:</label>
                                                <div class="col-sm-10">

                                                    <input type="file" name="file" class="upload">

                                                    <span class="help-block">لطفا تصویر عکس پرسونلی را آپلود کنید</span>
                                                </div>
                                                <button name="send" type="submit" class="btn btn-success btn-lg btn-block">ذخیره تصویر</button>
                                        </form>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar"  role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                                 aria-valuemax="100" style="width: 0%">
                                                <span class="sr-only">0% تکمیل شده</span>
                                            </div>

                                        </div>
                                    <div class="panel-body">
                                        <div class="panel-heading" style="display: none;">پیش نمایش</div>
                                        <hr class="khat" style="display: none;">
                                        <div id="thumb-output" class="col-md-3 center-block"></div>
                                    </div>
                                        <div class="panel-body">
                                            <div class="panel-heading" style="display: none;">تصویر نهایی</div>
                                            <hr class="khat" style="display: none;">
                                            <div id="result" class="col-md-3 col-lg-5 col-sm-3"></div>
                                    </div>
                            </div>
                            </section>
                    </div>
                </div>


            </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">پیشنمایش</div>
                    <div class="panel-body">
                        <div class="span6">
                            <div align="center" style="min-height: 32px;">
                                <div class="clearfix">
                                    <div class="btn-group inline pull-left" id="texteditor" style="display:none;">
                                        <button id="font-family" class="btn dropdown-toggle" data-toggle="dropdown" title="Font Style"><i class="icon-font" style="width:19px;height:19px;"></i></button>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="font-family-X">
                                            <li><a tabindex="-1" href="#" onclick="setFont('Arial');" class="Arial">Arial</a></li>
                                            <li><a tabindex="-1" href="#" onclick="setFont('Helvetica');" class="Helvetica">Helvetica</a></li>
                                            <li><a tabindex="-1" href="#" onclick="setFont('Myriad Pro');" class="MyriadPro">Myriad Pro</a></li>
                                            <li><a tabindex="-1" href="#" onclick="setFont('Delicious');" class="Delicious">Delicious</a></li>
                                            <li><a tabindex="-1" href="#" onclick="setFont('Verdana');" class="Verdana">Verdana</a></li>
                                            <li><a tabindex="-1" href="#" onclick="setFont('Georgia');" class="Georgia">Georgia</a></li>
                                            <li><a tabindex="-1" href="#" onclick="setFont('Courier');" class="Courier">Courier</a></li>
                                            <li><a tabindex="-1" href="#" onclick="setFont('Comic Sans MS');" class="ComicSansMS">Comic Sans MS</a></li>
                                            <li><a tabindex="-1" href="#" onclick="setFont('Impact');" class="Impact">Impact</a></li>
                                            <li><a tabindex="-1" href="#" onclick="setFont('Monaco');" class="Monaco">Monaco</a></li>
                                            <li><a tabindex="-1" href="#" onclick="setFont('Optima');" class="Optima">Optima</a></li>
                                            <li><a tabindex="-1" href="#" onclick="setFont('Hoefler Text');" class="Hoefler Text">Hoefler Text</a></li>
                                            <li><a tabindex="-1" href="#" onclick="setFont('Plaster');" class="Plaster">Plaster</a></li>
                                            <li><a tabindex="-1" href="#" onclick="setFont('Engagement');" class="Engagement">Engagement</a></li>
                                        </ul>
                                        <button id="text-bold" class="btn" data-original-title="Bold"><img src="{{asset('img/font_bold.png')}}" height="" width=""></button>
                                        <button id="text-italic" class="btn" data-original-title="Italic"><img src="{{asset('img/font_italic.png')}}" height="" width=""></button>
                                        <button id="text-strike" class="btn" title="Strike" style=""><img src="{{asset('img/font_strikethrough.png')}}" height="" width=""></button>
                                        <button id="text-underline" class="btn" title="Underline" style=""><img src="{{asset('img/font_underline.png')}}"></button>
                                        <a class="btn" href="#" rel="tooltip" data-placement="top" data-original-title="Font Color"><input type="hidden" id="text-fontcolor" class="color-picker" size="7" value="#000000"></a>
                                        <a class="btn" href="#" rel="tooltip" data-placement="top" data-original-title="Font Border Color"><input type="hidden" id="text-strokecolor" class="color-picker" size="7" value="#000000"></a>
                                        <!--- Background <input type="hidden" id="text-bgcolor" class="color-picker" size="7" value="#ffffff"> --->
                                    </div>
                                    <div class="pull-right" align="" id="imageeditor" style="display:none;">
                                        <div class="btn-group">
                                            <button class="btn" id="bring-to-front" title="Bring to Front"><i class="icon-fast-backward rotate" style="height:19px;"></i></button>
                                            <button class="btn" id="send-to-back" title="Send to Back"><i class="icon-fast-forward rotate" style="height:19px;"></i></button>
                                            <button id="remove-selected" class="btn" title="Delete selected item"><i class="icon-trash" style="height:19px;"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--	EDITOR      -->
                            <div style="background-color: #ffffff;position: relative ; height:560px; background: url('../img/grid.png'); background-repeat: repeat;" class="maindiv">
                                <div id="phoneDiv" class="page" style="width: 282px; height: 590px; position: relative;left:25%; background-color: rgb(255, 255, 255);">
                                    <div id="resam"> </div> <!-- <img id="phone" src="{{asset('images/image-27288963.png')}}"></img> -->
                                    <div id="drawingArea" style="position: absolute; top: 10px;left: -120px;z-index: 10;width: 500px; height:450px;">
                                        <canvas id="tcanvas" width=230 height="450" class="hover" style="-webkit-user-select: none;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <!--	/EDITOR		-->
                        </div>

            </div>

            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">تنظیمات</div>

                    <div class="panel-body">
                         <div class="input-append">
                                  <input class="span2" id="text-string" type="text" placeholder="متن مورد نظرتان را بنویسید!"><button id="add-text" class="btn" title="Add text">افزودن متن</button>
                                  <hr>
                                  <hr>
                              </div>
                    </div>
                </div>
            </div>

                             
        </div>
        </div>
@endsection
