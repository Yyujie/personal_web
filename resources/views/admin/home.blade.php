@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">选你喜欢</div>

                    <div class="panel-body">

                        <a href="{{ url('/blog') }}" class="btn btn-lg btn-success col-xs-12">个人博客</a>
                        <a href="{{ url('/') }}" class="btn btn-lg btn-success col-xs-12">吐槽天地</a>
                        <a href="{{ url('/game') }}" class="btn btn-lg btn-success col-xs-12">五子棋对战</a>
                        <a href="{{ url('/') }}" class="btn btn-lg btn-success col-xs-12">学习资料</a>
                        <a href="{{ url('/wuhan') }}" class="btn btn-lg btn-success col-xs-12">武汉新鲜事</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection