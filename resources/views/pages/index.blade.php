@extends('layouts.app')
@section('title','mine sider')
@section('content')
<h2 class="fontsize65">Sidens indhold:</h2>
    @foreach($pages as $page)
    <a class="fontsize45" href="/pages/{{$page->id}}">{{ $page->title }}</a><br>
    @endforeach
@endsection