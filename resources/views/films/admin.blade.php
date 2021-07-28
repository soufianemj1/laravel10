@extends('layouts.app')
@section('content')
<form action="admin/store" method="post">
  @csrf
    <div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Titre</span>
            <input name="titre" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
          </div>
    
          <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupFile01">Upload</label>
            <input name="photo" type="file" class="form-control" id="inputGroupFile01">
          </div>
          
          <div><input type="submit"></div>
    </div>
</form>



@endsection