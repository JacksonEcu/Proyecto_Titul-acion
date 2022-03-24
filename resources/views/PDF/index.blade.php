@extends('layouts.app')

@section('title')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <div class="container">
        <form action="EnvioDatos" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="exampleFormControlFile1">Nombre Estudiante</label>
        <input class="form-control" type="text" name="nombre" class="form-control-file">
        </div>
        <div class="form-group">
        <label for="exampleFormControlFile1">Nivel</label>
        <input class="form-control" type="text" name="nivel" class="form-control-file">
        </div>
        <div class="form-group">
        <label for="exampleFormControlFile1">Entidad Formadora</label>
        <input class="form-control" type="text" name="entidad_formadora" class="form-control-file">
        </div>
        <div class="form-group">
        <label for="exampleFormControlFile1">Adjuntar Pdf</label>
        <input class="form-control" type="file" name="pdf" class="form-control-file">
        </div><br><br>
        <div align="center">
        <button  class="btn btn-success" type="submit"> Subir</button>
        </div>
</div>

@endsection