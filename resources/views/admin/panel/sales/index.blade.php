@extends('admin.layouts.app')
@section('title', 'Lista de ventas')

@section('main-content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Ventas</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.panel.index') }}">Inicio</a></li>
                <li class="breadcrumb-item active">Ventas</li>
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
        <h3 class="card-title">Lista de ventas</h3>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th style="width: 3%">
                        N°
                    </th>
                    <th style="width: 18%" class="text-center">
                        Cliente
                    </th>
                    <th style="width: 15%" class="text-center">
                        Documento
                    </th>
                    <th style="width: 15%" class="text-center">
                        E-mail
                    </th>
                    <th style="width: 12%" class="text-center">
                        Teléfono
                    </th>
                    <th style="width: 8%" class="text-center">
                        Estado
                    </th>
                    <th class="text-center">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($sales as $key=>$sale)
                <tr>
                    <td>
                        {{ $key + 1 }}
                    </td>
                    <td>
                        <a>
                            <strong>{{ \Illuminate\Support\Str::limit($sale->client_name, 30) }}</strong>
                        </a>
                    </td>
                    <td class="text-center">
                        {{ $sale->client_document_number }}
                        <br>
                        Tipo:
                        <small>
                            @if(strlen($sale->client_document_number) == 8)
                            Persona Natural
                            @elseif(strlen($sale->client_document_number) == 11)
                            Persona jurídica
                            @endif
                        </small>
                    </td>
                    <td class="text-center">
                        {{ \Illuminate\Support\Str::limit($sale->client_email, 30) }}
                    </td>
                    <td class="text-center">
                        +51 {{ $sale->client_phone }}
                    </td>
                    <td class="project-state">
                        @switch($sale->status)
                        @case(1)
                            <span class="badge badge-success">Entregado</span>
                            @break
                        @case(0)
                            <span class="badge badge-warning">Por entregar</span>
                            @break
                        @endswitch
                        
                    </td>
                    <td class="project-actions text-center">
                        <a class="btn btn-primary btn-sm" href="{{ route('admin.panel.sales.detail', ['id' => $sale->id]) }}">
                            <i class="fas fa-tasks">
                            </i>
                            Detalles
                        </a>
                        @if($sale->status == 0)
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-check">
                                </i>
                                Confirmar entrega
                            </a>
                        @endif
                    </td>
                </tr>
                @endforeach

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