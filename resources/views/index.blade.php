@extends('layout')
<p>Hello {{ $user }}</p>
<form action="/admin" method="POST">
    <input type="text" name="form">
    <input type="submit">
</form>

<br>



@section('content')
<h1>ajsdsak</h1><br>

@foreach ($posts as $post) {
    {{ $post->title }}
}