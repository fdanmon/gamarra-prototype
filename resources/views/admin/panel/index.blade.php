@extends('admin.layouts.app')
@section('title', 'Panel de Administración')

@section('main-content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">¡Bienvenido al panel de administración!</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Página Principal</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-mobile-alt"></i></span>

            <div class="info-box-content">
            <a href="#" class="info-box-text">Modelos en Stock</a>
            <span class="info-box-number">
                10
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
        </div>
        <!-- /.col -->
        
        <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

            <div class="info-box-content">
            <a href="#" class="info-box-text">Ventas Totales</a>
            <span class="info-box-number">15</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

            <div class="info-box-content">
            <a href="#" class="info-box-text">Ventas Entregadas</a>
            <span class="info-box-number">8</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
        </div>
        <!-- /.col -->
        
        <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
            <a href="#" class="info-box-text">Administradores</a>
            <span class="info-box-number">1</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <h5 class="card-title"><strong>Pequeño manual de uso</strong></h5>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
                </button>
            </div>
            </div>

            <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                <p>Para registrar un producto:</p>
                </div>
                <div class="col-md-12">
                <ol>
                    <li>En caso de que La categoría de la prenda no entre en las categorías ya existentes, primero registrar una nueva categoría para el modelo en Categorías>Agregar Nuevo</li>
                    <li>Una vez creada la categoría, recién se podrá registrar el nuevo modelo en Productos>AgregarNuevo.</li>
                </ol>
                </div>
            </div>
            </div>
            <div class="card-footer">
            <div class="row">
            </div>
            <!-- /.row -->
            </div>
            <!-- /.card-footer -->
        </div>
        <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    </div><!--/. container-fluid -->
</section>
<!-- /.content -->

@endsection