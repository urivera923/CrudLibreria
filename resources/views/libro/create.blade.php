@extends('layouts.app')

@section('template_title')
    Crear Libro
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header bg-dark text-center text-white fw-bold">
                        <span class="card-title">Crear Libro</span>
                    </div>
                    <div class="card-body fw-bolder">
                        <form method="POST" action="{{ route('libros.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('libro.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
