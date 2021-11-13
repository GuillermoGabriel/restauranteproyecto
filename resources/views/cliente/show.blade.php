@extends('layouts.app')

@section('template_title')
    {{ $cliente->name ?? 'Show Cliente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cliente.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Cli:</strong>
                            {{ $cliente->nombre_cli }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidopaterno Cli:</strong>
                            {{ $cliente->apellidopaterno_cli }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidomaterno Cli:</strong>
                            {{ $cliente->apellidomaterno_cli }}
                        </div>
                        <div class="form-group">
                            <strong>Correo Cli:</strong>
                            {{ $cliente->correo_cli }}
                        </div>
                        <div class="form-group">
                            <strong>Celular Cli:</strong>
                            {{ $cliente->celular_cli }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion Cli:</strong>
                            {{ $cliente->direccion_cli }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
