@extends('admin.layouts.app')
@section('title', 'Agregar Nuevo')

@section('main-content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Agregar producto</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.panel.index') }}">Inicio</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('admin.panel.products.index') }}">Productos</a></li>
            <li class="breadcrumb-item active">Agregar nuevo</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<form action="#" class="content" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6" style="margin: auto;">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">General</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputName">Nombre del producto(*)</label>
                        <input name="name" type="text" id="inputName" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="inputName">Breve presentación(*)</label>
                        <input name="presentation" type="text" id="inputPresentation" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="inputDescription">Acerca del producto(*)</label>
                        <textarea name="about" id="inputDescription" class="form-control" rows="2" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputStatus">Categoría(*)</label>
                        <select name="category_id" class="form-control custom-select" required>
                            <option selected disabled>Selecciona categoría</option>
                            <option value="1">Polos para niños</option>
                            <option value="2">Polos cuello V</option>
                            <option value="3">Polos cuello camisa</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputCoverPhoto">Fotografía de inicio(*)</label>
                        <input name="cover_photo" type="file" id="inputCoverPhoto" class="form-control" accept="image/*" required>
                        <img src="#" alt="" style="display: none;">
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <div class="row">
        <div class="col-6" style="margin: auto;">
            <a href="{{ route('admin.panel.products.index') }}" class="btn btn-secondary">Cancelar</a>
            <input type="submit" value="Crear nuevo producto" class="btn btn-success float-right">
        </div>
    </div>
</form>
<!-- /.content -->
@endsection