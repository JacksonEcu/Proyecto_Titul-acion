@extends('layouts.app')

@section('template_title')
    Update Rubrica
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Rubrica</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('rubricas.update', $rubrica->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('rubrica.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
