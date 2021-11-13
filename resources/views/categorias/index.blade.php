@extends('layouts.app')

@section('content')
<div class="container">


    
@if(Session::has('mensaje'))<div class="alert alert-success alert-dismissible" role="alert">
{{Session::get('mensaje')}}<button type="button" class="close" data-dismiss="alert" aria-label="close">
    <span aria-hidden="true">&times;</span>

</button>

@endif



</div>


<a href="{{url('categorias/create')}}"class="btn btn-success">registrar</a>
<br><br>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>foto</th>
            <th>Categoria</th>
            <th>estado</th>
            <th>Acciones</th>
          
        </tr>

    </thead>

    <tbody>
        @foreach($categorias as $categorias)
        <tr>
            <td>{{$categorias->id}}</td>

            <td>
            <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$categorias->foto}}" width="100"  alt="" >

            
            </td>


            <td>{{$categorias->ca_categoria}}</td>
            <td>{{$categorias->ca_estado}}</td>
            <td>
            
            <a href="{{url('/categorias/'.$categorias->id.'/edit')}}"class="btn btn-success">


                
                Editar 
            </a>

             <form action="{{url('/categorias/'.$categorias->id)}}" class="d-inline"method="post">
                @csrf
                {{method_field('DELETE')}}
                <input class="btn btn-danger" type="submit" onclick="return confirm('Quieres eliminar?')" 
                value="Borrar">

             </form>


            </td>
           
       

        </tr>
        @endforeach

    </tbody>

</table>

</div>
@endsection