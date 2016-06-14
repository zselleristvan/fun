@extends('pages.pages')
@section('content')
    <h1>All cards</h1>
    @foreach($cards as $card)
        <li>{{$card->title}}</li>
    @endforeach
@stop