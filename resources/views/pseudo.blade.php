@extends('template')
@section('title')
Pseudo and Age
@endsection
@section('content')
<h1>pseudo: {{$request->pseudo}}</h1>
<h1>age: {{$request->age}} </h1>
@endsection
