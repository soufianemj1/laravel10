@extends('layouts.app')
@section('css')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

@section('content')

<div class="singleimg" >
    <img src="../images/{{$singlefilm->image}} " alt="" >
</div>

<form action="{{route('storecomment')}}" method="post">
    @csrf
    <div class="commenter">
        <div class="form-floating">
            <textarea class="form-control" name="usercomment" placeholder="Leave a comment here" id="commentaire"></textarea>
            <input type="submit" value="commenter">
            <input type="hidden" name="filmid" value="{{$singlefilm->id}}">
          </div>
    </div>
</form>

<h5>les commenaires:</h5>
@foreach($comment as $commentaire)
<div class="commentaire">

<p>{{$commentaire->comment}}</p>
    


</div>
@endforeach











@endsection
@endsection