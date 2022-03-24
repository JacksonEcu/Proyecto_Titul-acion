@extends('layouts.app')

@section('title')


@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <div class="container">
        <table class="table">
            <thead>
                <th>Id</th>
                <th>Nombre</th>
                <th>Nivel</th>
                <th>Entidad Formadora</th>
                <th>Documento</th>
            </thead>
            <tbody>
                @foreach ($datos as $d)
                <tr>
                    <td>{{$d->id_doc}}</td>
                    <td>{{$d->nombre}}</td>
                    <td>{{$d->nivel}}</td>
                    <td>{{$d->entidad_formadora}}</td>
                    <td><a class="btn btn-primary"   href="Archivos/{{$d->documento}}" target="_blannk">Ver documento</a></td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
@endsection