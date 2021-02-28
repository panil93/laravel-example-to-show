@extends('layouts.app')
@section('title', $page->title)
@section('header')

<div class="row">
@foreach($pages as $p)

  <div class="col-sm-4 col-md-4 fontsize45">
  <a href="/pages/{{$p->id}}">{{ $p->title }}</a>
    
    
  </div>

@endforeach
</div>
@endsection
@section('content')   

    {!!$page->content!!}
@endsection
