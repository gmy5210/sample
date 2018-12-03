@extends('layouts.default')

@section('content')

    <div class="jumbotron">

        <h1>Helllo Laravel</h1>
        <p class="lead">

            你现在所爱看到的是 <a href="https://laravel-china.org/courses/laravel-essential-training-5.5">Laravel 入门</a>

        </p>
        <p>
            一切，将从这里开始
        </p>

        <p>
            <a href="{{ route('signup') }}" class="btn btn-lg btn-success" role="button">现在注册</a>
        </p>

    </div>

@stop