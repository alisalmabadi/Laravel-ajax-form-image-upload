@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">ذخیره نوت</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                            <div class="col-lg-12">
                                <section class="panel">

                                    <div class="panel-body">
                                        <form action="{{route('add-note')}}" class="form-horizontal" method="post">
                                            <div class="form" style="height: 600px;">
                                                {{csrf_field()}}


                                                <label class="col-sm-2 control-label">عنوان نوت</label>
                                                <div class="col-sm-10">

                                                    <input name="title" type="text" class="form-control">
                                                    <span class="help-block">عنوانی مختصر جهت نمایش پیام برای کاربر بنویسید.</span>
                                                </div>

                                                <label class="col-sm-2 control-label">محتوای خبر را وارد کنید</label>
                                                <div class="col-sm-10">


                                                    <textarea id="editor1" class="form-control ckeditor" class="ckeditor" name="content" rows="6"></textarea>
                                                    <span class="help-block">هر متنی که دوست دارید!</span>
                                                </div>








                                                <button name="send" type="submit" class="btn btn-success btn-lg btn-block">ذخیره نوت</button>
                                        </form>

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
@endsection
