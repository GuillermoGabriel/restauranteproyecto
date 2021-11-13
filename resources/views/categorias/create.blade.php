@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{url('/categorias')}}" method="post" enctype="multipart/form-data">
@csrf   
@include('categorias.form',['modo'=>'crear']); 

</form>
</div>
@endsection