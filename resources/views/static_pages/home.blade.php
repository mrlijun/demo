@extends('layout/default')
@section('title','主页')
@section('content')
    <div class="jumbotron">
        <h1>Laravel Demo</h1>
        <p class="lead">这是一个Demo，这个<a href="https://www.baidu.com">链接</a>到百度</p>
        <p>使劲敲吧！</p>
        <p>
            试试点这<a class="btn btn-lg btn-success" href="{{ route('signup') }}">注册吧</a>
        </p>
    </div>
@stop