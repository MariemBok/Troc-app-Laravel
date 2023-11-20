@extends('template')

@section('title')
Hello {{$name}}
@endsection


@section('content')
<h1>Hello {{$name}}</h1>

<form action="result" method="get">
    Pseudo: <input type="text" name="pseudo">
    <br>
    Age: <input type="text" name="age">
    <input type="submit" value="valider">
</form>

@endsection
