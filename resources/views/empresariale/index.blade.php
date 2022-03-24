@extends('layouts.app')

@section('template_title')
    Empresariale
@endsection
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Empresarial') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('rubricas.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Ver Rubrica') }}
                                </a>
                              </div>
                              <div class="float-right">
                                <a href="{{ route('empresariales.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Proyecto') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('Exitoso'))
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
                                        
										<th>Nom Estudiante</th>
										<th>Nivel</th>
										<th>Ent Formadora</th>
										<th>Tit Proyecto</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($empresariales as $empresariale)
                                        <tr>                                            
											<td>{{ $empresariale->nom_estudiante }}</td>
											<td>{{ $empresariale->nivel }}</td>
											<td>{{ $empresariale->ent_formadora }}</td>
											<td>{{ $empresariale->tit_proyecto }}</td>
                                            <td>
                                                <form action="{{ route('empresariales.destroy',$empresariale->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('empresariales.show',$empresariale->id) }}"><i class="fa fa-fw fa-eye"></i> Visualizar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('empresariales.edit',$empresariale->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                    <a class="btn btn-sm btn-primary" href="{{ route('datos.store') }}"><i class="fa fa-fw fa-edit"></i> Subir PDF</a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $empresariales->links() !!}
            </div>
        </div>
    </div>
@endsection
