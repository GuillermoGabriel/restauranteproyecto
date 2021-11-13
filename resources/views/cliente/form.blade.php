<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_cli') }}
            {{ Form::text('nombre_cli', $cliente->nombre_cli, ['class' => 'form-control' . ($errors->has('nombre_cli') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Cli']) }}
            {!! $errors->first('nombre_cli', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidopaterno_cli') }}
            {{ Form::text('apellidopaterno_cli', $cliente->apellidopaterno_cli, ['class' => 'form-control' . ($errors->has('apellidopaterno_cli') ? ' is-invalid' : ''), 'placeholder' => 'Apellidopaterno Cli']) }}
            {!! $errors->first('apellidopaterno_cli', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidomaterno_cli') }}
            {{ Form::text('apellidomaterno_cli', $cliente->apellidomaterno_cli, ['class' => 'form-control' . ($errors->has('apellidomaterno_cli') ? ' is-invalid' : ''), 'placeholder' => 'Apellidomaterno Cli']) }}
            {!! $errors->first('apellidomaterno_cli', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correo_cli') }}
            {{ Form::text('correo_cli', $cliente->correo_cli, ['class' => 'form-control' . ($errors->has('correo_cli') ? ' is-invalid' : ''), 'placeholder' => 'Correo Cli']) }}
            {!! $errors->first('correo_cli', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('celular_cli') }}
            {{ Form::text('celular_cli', $cliente->celular_cli, ['class' => 'form-control' . ($errors->has('celular_cli') ? ' is-invalid' : ''), 'placeholder' => 'Celular Cli']) }}
            {!! $errors->first('celular_cli', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion_cli') }}
            {{ Form::text('direccion_cli', $cliente->direccion_cli, ['class' => 'form-control' . ($errors->has('direccion_cli') ? ' is-invalid' : ''), 'placeholder' => 'Direccion Cli']) }}
            {!! $errors->first('direccion_cli', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>