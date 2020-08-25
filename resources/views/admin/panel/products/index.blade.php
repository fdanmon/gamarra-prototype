@extends('admin.layouts.app')
@section('title', 'Lista de productos')

@section('main-content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Productos</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.panel.index') }}">Inicio</a></li>
                <li class="breadcrumb-item active">Productos</li>
            </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
    <div class="card-header">
        <h3 class="card-title">Lista de productos</h3>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th style="width: 2%">
                        N°
                    </th>
                    <th style="width: 18%" class="text-center">
                        Nombre del producto
                    </th>
                    <th style="width: 22%" class="text-center">
                        Presentación
                    </th>
                    <th class="text-center">
                        Precio
                    </th>
                    <th class="text-center">
                        Disponibles
                    </th>
                    <th style="width: 5%" class="text-center">
                        Estado
                    </th>
                    <th style="width: 25%" class="text-center">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        1
                    </td>
                    <td>
                        <a>
                            <strong>Color entero</strong>
                        </a>
                        <br/>
                        <small>
                            Categoría: Polos Cuello V
                        </small>
                    </td>
                    <td title="">
                        {{ \Illuminate\Support\Str::limit('Los mejores polos los encontrarás aquí.', 30) }}
                    </td>
                    <td class="project_progress" class="text-center">
                        S/. 50.00
                    </td>
                    <td class="text-center">
                        <a href="#">3</a>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">En venta</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('admin.panel.products.list-photos') }}">
                            <i class="fas fa-folder">
                            </i>
                            Fotos
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Editar
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Eliminar
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>
                        2
                    </td>
                    <td>
                        <a>
                            <strong>Multicolor</strong>
                        </a>
                        <br/>
                        <small>
                            Categoría: Polos Cuello V
                        </small>
                    </td>
                    <td title="">
                        {{ \Illuminate\Support\Str::limit('Inigualables polos los encontrarás aquí.', 30) }}
                    </td>
                    <td class="project_progress" class="text-center">
                        S/. 20.00
                    </td>
                    <td class="text-center">
                        <a href="#">2</a>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">En venta</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            Fotos
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Editar
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Eliminar
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>
                        3
                    </td>
                    <td>
                        <a>
                            <strong>A rayas</strong>
                        </a>
                        <br/>
                        <small>
                            Categoría: Polos Cuello Camisa
                        </small>
                    </td>
                    <td title="">
                        {{ \Illuminate\Support\Str::limit('Polos a medida los encontrarás aquí.', 30) }}
                    </td>
                    <td class="project_progress" class="text-center">
                        S/. 40.00
                    </td>
                    <td class="text-center">
                        <a href="#">0</a>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-danger">Sin stock</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            Fotos
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Editar
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Eliminar
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>
                        4
                    </td>
                    <td>
                        <a>
                            <strong>Dos colores</strong>
                        </a>
                        <br/>
                        <small>
                            Categoría: Polos Deportivos
                        </small>
                    </td>
                    <td title="">
                        {{ \Illuminate\Support\Str::limit('Increíbles polos los encontrarás aquí.', 30) }}
                    </td>
                    <td class="project_progress" class="text-center">
                        S/. 15.00
                    </td>
                    <td class="text-center">
                        <a href="#">5</a>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">En venta</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            Fotos
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Editar
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Eliminar
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->

@endsection

@section('page-scripts')
@endsection