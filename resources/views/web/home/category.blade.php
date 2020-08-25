@extends('web.layouts.app')
@section('title', 'Polos Cuello V')

@section('main-content')

<div class="my-4">
    <div class="container">
        <div class="row d-flex flex-row justify-content-center">
            <div class="d-flex flex-column justify-content-center align-items-center" style="margin-right: 10px;">
                <img src="{{ asset('storage/cuello-v-1.jpg') }}" alt="Polos Cuello V" height="300">
                <h2>Color entero</h2>
                <p class="text-lead">Selecciona la talla que prefieras</p>
                <div class="">
                    <a class="btn btn-orange px-5" href="{{ route('web.home.product') }}">Talla S</a>
                    <a class="btn btn-orange px-5" href="#">Talla M</a>
                </div>
                <p class="py-4">Color celeste para adulto.</p>
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center" style="margin-left: 10px;">
                <img src="{{ asset('storage/cuello-v-2.jpg') }}" alt="Polos Cuello V" height="300">
                <h2>Multicolor</h2>
                <p class="text-lead">Selecciona la talla que prefieras</p>
                <div class="">
                    <a class="btn btn-orange px-5" href="#">Talla M</a>
                    <a class="btn btn-orange px-5" href="#">Talla L</a>
                </div>
                <p class="py-4">Color blanco para adulto.</p>
            </div>
        </div>
    </div>
</div>
@endsection