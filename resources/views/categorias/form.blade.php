<h1>{{$modo}} categorias</h1>




<div class="form-group">
    
<label for="ca_categoria">categoria</label>
<input type="text" class="form-control"name="ca_categoria" value="{{isset($categorias->ca_categoria)?$categorias->ca_categoria:''}}" id="ca_categoria" required>

</div>
<div class="form-group">
<label for="ca_categoria">estado</label>    
<input type="text" class="form-control" name="ca_estado" value="{{isset($categorias->ca_estado)?$categorias->ca_estado:''}}" id="ca_estado" required>
   
</div>
<div class="form-group">
<label for="ca_categoria"></label>
@if(isset($categorias->foto))

<img class="img-thumbnail img-fluid"src="{{asset('storage').'/'.$categorias->foto}}" width="100" required>

@endif
<input type="file" class="form-control" name="foto" value="{{isset($categorias->foto)?$categorias->foto:''}}" id="foto">

</div>
<input class="btn btn-success"type="submit" value="{{$modo}} datos">

<a class="btn btn-primary" href="{{url('categorias/')}}">REGRESAR</a>
<br>