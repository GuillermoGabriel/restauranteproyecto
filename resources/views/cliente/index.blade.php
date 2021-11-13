@extends('layouts.app')

@section('template_title')
    Cliente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cliente') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cliente.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre Cli</th>
										<th>Apellidopaterno Cli</th>
										<th>Apellidomaterno Cli</th>
										<th>Correo Cli</th>
										<th>Celular Cli</th>
										<th>Direccion Cli</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cliente as $cliente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $cliente->nombre_cli }}</td>
											<td>{{ $cliente->apellidopaterno_cli }}</td>
											<td>{{ $cliente->apellidomaterno_cli }}</td>
											<td>{{ $cliente->correo_cli }}</td>
											<td>{{ $cliente->celular_cli }}</td>
											<td>{{ $cliente->direccion_cli }}</td>

                                            <td>
                                                <form action="{{ route('cliente.destroy',$cliente->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cliente.show',$cliente->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cliente.edit',$cliente->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
@endsection
