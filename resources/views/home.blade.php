@extends('layouts.app')
@section('css')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

@section('content')

@foreach($films as $film)
  

<div class="filmglobal">
<div>
<img src="images/{{$film->image}}" alt="" width="170" height="190">
</div>
<div>

<div id="titre">
<H3>{{$film->name}}</H3>

<a href="{{route('singlefilm',$film->id)}}">voir</a>
</div>

</div>
</div>

@endforeach







@endsection
@endsection