@extends('layouts.default')
@section('content')
    @if (Auth::check())
        <div class="row">
            <div class="col-md-8">
                <section class="status_form">
                    @include('shared._status_form')
                </section>
                <h4>动态列表</h4>
                <hr>
                @include('shared._feed')
            </div>
            <aside class="col-md-4">
                <section class="user_info">
                    @include('shared._user_info', ['user' => Auth::user()])
                </section>
                <section class="stats mt-2">
                    @include('shared._stats', ['user' => Auth::user()])
                </section>
            </aside>
        </div>
    @else
        <div class="jumbotron">
            <h1>Hello Friend</h1>
            <p class="lead">
                 <a href="http://weibo.com/u/3094689665?is_hot=1">你现在所看到的是: 黄向荣作为后端开发者的经验，感谢大家来捧场。</a>
            </p>
            <p>
                在这里，你也可以了解关于我的最新动态。
            </p>
            <p>
                <a class="btn btn-lg btn-success" href="{{ route('users.index') }}" role="button">立即浏览</a>
            </p>
        </div>
    @endif
@stop
