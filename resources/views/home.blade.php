@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card  text-center">
                <div class="card-header fw-bold bg-dark text-white">{{ __('Crud de Libros') }}</div>

                <div class="card-body fw-bolder">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('¡Bienvenido ya estas logueado!' ) }}
                    <div class="d-flex align-items-center justify-content-center my-3">
                        <img class="figure-img img-fluid rounded shadow mb-4 bg-body border border-2 border-light" src="{{ asset('https://estaticos.muyinteresante.es/uploads/images/test/5899d3b75cafe85ef18b4568/test-libros0.jpg') }}" alt="" width="30%">
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
