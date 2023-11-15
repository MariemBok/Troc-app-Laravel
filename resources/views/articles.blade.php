@extends('template')

@section('title')
    Articles
@endsection

@section('content')

<ul>


    @foreach ($articles as $article)
        <li>{{$article->title}}, price: {{$article->price}} </li>
        <br>
    @endforeach
</ul>

@endsection
