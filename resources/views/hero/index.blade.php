@extends('layouts/app')

@section('content')

<h1>The hero roster</h1>

@foreach($heros as $hero)
<a href="{{ route('show hero', ['hero_slug' => $hero->slug]) }}">{{ $hero->name }}</a>

@endforeach

@endsection