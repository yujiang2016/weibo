@extends('layouts.default')
@section('content')
    @if(Auth::check())
        <div class="row">
            <div class="col-md-8">
                <section class="status-form">
                    @include('shared._status_form')
                </section>
                <h4>微博列表</h4>
                <hr>
                @include('shared._feed')
            </div>
            <aside class="col-md-4">
                <section class="user_info">
                    @include('shared._user_info',['user'=>Auth::user()])
                </section>
                <section class="stats md-2">
                    @include('shared._stats',['user'=>Auth::user()])
                </section>
            </aside>
        </div>
        @else
    <div class="jumbotron">
        <h1>hello laravel1</h1>
        <p class="lead">你现在所看到的是的 <a href="">laravel入门教程的实力项目主页</a> </p>
        <p>一切从这里开始</p>
        <p><a class="btn btn-lg btn-success" href="{{route('signup')}}">现在注册</a></p>
    </div>
    @endif
@stop