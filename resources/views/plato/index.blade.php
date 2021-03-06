@extends('layouts.app')

@section('template_title')
    Plato
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Plato') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('plato.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('crear nuevo registro') }}
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
                                        
										<th>Categoria</th>
										<th>Nom Plato</th>
										<th>Precio</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($plato as $plato)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{$plato->categoria_id}}


                                            </td>
											<td>{{ $plato->nom_plato }}</td>
											<td>{{ $plato->precio }}</td>

                                            <td>
                                                <form action="{{ route('plato.destroy',$plato->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('plato.show',$plato->id) }}"><i class="fa fa-fw fa-eye"></i> Descripcion</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('plato.edit',$plato->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> eliminar</button>
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
