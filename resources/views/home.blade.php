@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <h1 class="text-5xl text-center pt-24">No estas permitido para esta opción!!</h1>
  <br><br>
  <div align="center">
  <a class="btn btn-primary" href="{{ route('empresariales.index') }}"> Ir a proyecto</a>
</div><br><br>
<div align="center">
      <a class="btn btn-primary" href="{{ route('rubricas.index') }}"> Ir a rubrica</a>
</div>

@endsection
