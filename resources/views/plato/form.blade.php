<div class="box box-info padding-1">
    <div class="box-body">
        
       

        <div class="form-group">
            {{ Form::label('categoria_id') }}
            {{ Form::select('categoria_id', $categorias,$plato->categoria_id, ['class' => 'form-control' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Categoria Id']) }}
            {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>



        <div class="form-group">
            {{ Form::label('nom_plato') }}
            {{ Form::text('nom_plato', $plato->nom_plato, ['class' => 'form-control' . ($errors->has('nom_plato') ? ' is-invalid' : ''), 'placeholder' => 'Nom Plato']) }}
            {!! $errors->first('nom_plato', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::text('precio', $plato->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>