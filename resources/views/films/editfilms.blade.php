@extends('layouts.app')
@section('css')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection
@section('content')

<form action="{{route('update',$film->id)}}" method="post">
    @csrf
    <div class="singleimg" >
        <img src="../images/{{$film->image}} " alt="" >

        <div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Titre</span>
                <input name="titre" type="text" class="form-control" placeholder="{{$film->name}}" aria-label="" aria-describedby="basic-addon1">
              </div>
        
              <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupFile01">Upload</label>
                <input name="photo" type="file" class="form-control" id="inputGroupFile01">
              </div>
              <input type="hidden" value="{{$film->id}}">
              
              <div><input type="submit" value="update"></div>
        </div>

        
        
    </div>
</form>
@endsection

