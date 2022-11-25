@extends('layouts.app')

@section('template_title')
    {{ $libro->name ?? 'Show Libro' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-dark text-white fw-bold text-center">
                        <div class="float-left">
                            <span class="card-title fw-bold">Más información del Libro</span>
                        </div>
                        
                    </div>

                    <div class="card-body fw-bolder">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $libro->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $libro->precio }}
                        </div>

                    </div>
                </div>
            </div>
            <div class="float-right">
                <a class="btn btn-primary mt-2" href="{{ route('libros.index') }}"><i class="fa fa-solid fa-circle-arrow-left me-2"></i> Regresar</a>
            </div>
        </div>
    </section>
@endsection
