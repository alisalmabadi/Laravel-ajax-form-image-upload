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
@foreach($note as $item)

    <li>{{$item->id}}<br></li>
     <li>{{$item->title}}<br></li>
    <li>{{$item->content}}<br></li>
    <li>{{$item->user_id}}<br></li>
<hr>

    @endforeach

                    </div>
                </div>


            </div>
                </div>
            </div>
        </div>
    </div>
@endsection
