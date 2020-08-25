@extends('web.layouts.app')
@section('title', 'Tienda XXXX')

@section('main-content')
<div class="">
    <div class="text-rigth container my-4">
        <strong>Tienda XXXX - Gamarra</strong>
    </div>
</div>

<div class="m-4">
    <div class="row row-cols-md-2">

        <div class="col mb-4">
            <div class="card">
                <img src="{{ asset('storage/tshirts_v.jpg') }}" class="card-img-top" alt="Categoría">
                <div class="card-body">
                    <h5 class="card-title">Polos Cuello V</h5>
                    <p class="card-text text-lead">Los mejores polos cuello V los encontrarás aquí.</p>
                    <a href="{{ route('web.home.category') }}" class="btn btn-orange">Ver categoría</a>
                </div>
            </div>
        </div>

        <div class="col mb-4">
            <div class="card">
                <img src="{{ asset('storage/tshirts_camisero.jpg') }}" class="card-img-top" alt="Categoría">
                <div class="card-body">
                    <h5 class="card-title">Polos Cuello Camisa</h5>
                    <p class="card-text text-lead">Los mejores polos cuello camisa los encontrarás aquí.</p>
                    <a href="#" class="btn btn-orange">Ver categoría</a>
                </div>
            </div>
        </div>

        <div class="col mb-4">
            <div class="card">
                <img src="{{ asset('storage/tshirts_sports.jpg') }}" class="card-img-top" alt="Categoría">
                <div class="card-body">
                    <h5 class="card-title">Polos Deportivos</h5>
                    <p class="card-text text-lead">Los mejores polos deportivos los encontrarás aquí.</p>
                    <a href="#" class="btn btn-orange">Ver categoría</a>
                </div>
            </div>
        </div>

        <div class="col mb-4">
            <div class="card">
                <img src="{{ asset('storage/tshirts_long.jpg') }}" class="card-img-top" alt="Categoría">
                <div class="card-body">
                    <h5 class="card-title">Polos Manga Larga</h5>
                    <p class="card-text text-lead">Los mejores polos manga larga los encontrarás aquí.</p>
                    <a href="#" class="btn btn-orange">Ver categoría</a>
                </div>
            </div>
        </div>

        {{--
        @foreach($categories as $category)

            <div class="col mb-4">
                <div class="card">
                    <img src="{{ asset($category->cover_photo_url) }}" class="card-img-top" alt="{{ $category->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $category->name }}</h5>
                        <p class="card-text text-lead">{{ $category->presentation }}</p>
                        <a href="{{ route('web.home.product-category', ['custom_url' => $category->custom_url]) }}" class="btn btn-orange">Ver categoría</a>
                    </div>
                </div>
            </div>

        @endforeach
        --}}
    </div>
</div>

<div class="m-4">
    <div class="text-center p-3 border-top border-bottom text-orange"><h4>Polos</h4></div>
</div>
@endsection