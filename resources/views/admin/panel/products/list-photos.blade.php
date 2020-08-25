@extends('admin.layouts.app')
@section('title', 'Listar fotos')

@section('main-content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Listar Fotos</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.panel.index') }}">Inicio</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('admin.panel.products.index') }}">Productos</a></li>
            <li class="breadcrumb-item active"><a href="#">Polos cuello V Color entero</a></li>
            <li class="breadcrumb-item active">Ver fotos</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <div class="card-title">
                            Galería de fotos de Polos Cuello V
                        </div>
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="btn-group w-100 mb-2">
                                <a class="btn btn-info active" href="javascript:void(0)" data-filter="all">Todas las fotos</a>
                                <a class="btn btn-info" href="javascript:void(0)" data-filter="celeste">Celeste</a>
                            </div>
                        </div>
                        <div>
                            <div class="filter-container p-0 row">
                                <div class="filtr-item col-sm-2" data-category="celeste" data-sort="celeste sample">
                                    <a href="{{ asset('storage/cuello-v-1.jpg') }}" data-toggle="lightbox" data-title="sample 1 - celeste">
                                    <img src="{{ asset('storage/cuello-v-1.jpg') }}" class="img-fluid mb-2" alt="celeste sample"/>
                                    </a>
                                </div>
                                <div class="filtr-item col-sm-2" data-category="celeste" data-sort="celeste sample">
                                    <a href="{{ asset('storage/cuello-v-3.jpg') }}" data-toggle="lightbox" data-title="sample 2 - celeste">
                                    <img src="{{ asset('storage/cuello-v-3.jpg') }}" class="img-fluid mb-2" alt="celeste sample"/>
                                    </a>
                                </div>
                                <div class="filtr-item col-sm-2" data-category="celeste" data-sort="celeste sample">
                                    <a href="{{ asset('storage/cuello-v-4.jpg') }}" data-toggle="lightbox" data-title="sample 3 - celeste">
                                    <img src="{{ asset('storage/cuello-v-4.jpg') }}" class="img-fluid mb-2" alt="celeste sample"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection

@section('page-scripts')
<script src="{{ asset('plugins/ekko-lightbox/ekko-lightbox.min.js') }}"></script>
<script src="{{ asset('plugins/filterizr/jquery.filterizr.min.js') }}"></script>
@endsection