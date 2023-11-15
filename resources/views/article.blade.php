@extends('template')

@section('title')
article {{$article->id}}
@endsection

@section('content')
<h1>{{$article->title}}</h1>
<p> {{$article->content}} </p>
@endsection
