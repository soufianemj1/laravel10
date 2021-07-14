@extends('layouts.app')
@section('css')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

@section('content')


<div class="filmglobal">
<div>
<img src="img_girl.jpg" alt="" width="170" height="190">
</div>
<div>

<div>
<H3>Romana o bertal</H3>
</div>

<div>
<p>Romana o bertal est un bon film a voir, l'histoire se passe dans un village ...<p>
</div>


</div>
</div>
<form action="">
<div class="comment">
<div class="form-group">
    <label for="exampleFormControlTextarea1">Commentaire</label>
    <textarea class="form-control" id="usercomment" name="usercomment" rows="3"></textarea>

  </div>


</div>

<input class="button" type="submit">


</form>


<div>
<H5>les commentaires:</H5> <br>

</div>

<div>
<p class="commentaire" >commentaierereeaz</p>

</div>







@endsection
@endsection