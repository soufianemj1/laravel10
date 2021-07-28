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


</div>


<div class="actions">
    <a href={{"delete/".$film->id}}>Supprimer</a>
    <a href={{"edit/".$film->id}}>modifier</a>


</div>


</div>
</div>

@endforeach







@endsection
@endsection