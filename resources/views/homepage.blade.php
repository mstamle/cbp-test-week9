@extends('layouts/app')

@section('content')
<div class="page page-home">

    <a href="{{ action('HeroController@index') }}"><img src="img/justice-league-logo.png" alt="" class="logo"></a>
    <h1>Justice League<br><small>Emergency reporting</small></h1>

    <div class="desc">
        Is there an emergency? Let us know. We will be in touch as soon as possible.
    </div>

    <a href="{{ action('HeroController@index') }}" class="report">Report an emergency</a>

    <div class="heroes">
        <a href="#">
            <img src="img/aquaman.jpg" alt="">
        </a>
        <a href="#">
            <img src="img/batman.jpg" alt="">
        </a>
        <a href="#">
            <img src="img/cyborg.jpg" alt="">
        </a>
        <a href="#">
            <img src="img/flash.jpg" alt="">
        </a>
        <a href="#">
            <img src="img/wonderwoman.jpg" alt="">
        </a>
    </div>

</div>
@endsection
