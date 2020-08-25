@extends('admin.layouts.app')
@section('title', 'Detalle de venta')

@section('main-content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><strong>Venta N° {{ $saleDetails->id }}</strong></h1>
                <h5>Cliente: {{ $saleDetails->client_name }} - {{ $saleDetails->client_document_number }}</h5>
                <h6>Fecha de venta: {{ $saleDetails->created_at }}</h6>
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
        <h3 class="card-title">Detalles de venta</h3>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th style="width: 3%">
                        N°
                    </th>
                    <th style="width: 18%" class="text-center">
                        Producto
                    </th>
                    <th style="width: 15%" class="text-center">
                        Talla
                    </th>
                    <th style="width: 15%" class="text-center">
                        Color
                    </th>
                    <th style="width: 12%" class="text-center">
                        Precio por unidad
                    </th>
                    <th style="width: 8%" class="text-center">
                        Cantidad
                    </th>
                    <th class="text-center">
                        Subtotal
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($saleDetails->shoppingCart->shoppingCartDetails as $key=>$detail)
                <tr>
                    <td>
                        {{ $key + 1 }}
                    </td>
                    <td>
                        <a>
                            {{ \Illuminate\Support\Str::limit($detail->product_name, 30) }}
                        </a>
                    </td>
                    <td class="text-center">
                        {{ $detail->product_size }}
                    </td>
                    <td class="text-center">
                        {{ \Illuminate\Support\Str::limit($detail->product_color, 30) }}
                    </td>
                    <td class="text-center">
                        S/. {{ number_format($detail->unit_price, 2) }}
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">{{ $detail->quantity }}</span>
                    </td>
                    <td class="project-actions text-center">
                        S/. {{ number_format($detail->subtotal, 2) }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-body p-20">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th class="text-center">
                        ---
                    </th>
                    <th class="text-center">
                        ---
                    </th>
                    <th class="text-center">
                        ---
                    </th>
                    <th style="width: 10%" class="text-center">
                        Subtotal
                    </th>
                    <th style="width: 10%" class="text-center">
                        Impuesto Total
                    </th>
                    <th style="width: 12%" class="text-center">
                        Descuento Total
                    </th>
                    <th style="width: 10%" class="text-center">
                        Total
                    </th>
                    <th style="width: 4%">

                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td class="text-center">
                    </td>
                    <td class="text-center">
                        S/. {{ number_format($saleDetails->shoppingCart->subtotal, 2) }}
                    </td>
                    <td class="text-center">
                        S/. {{ number_format($saleDetails->shoppingCart->total_tax, 2) }}
                    </td>
                    <td class="project-state">
                        {{ number_format($saleDetails->shoppingCart->total_discount, 2) }}
                    </td>
                    <td class="project-actions text-center">
                        S/. {{ number_format($saleDetails->shoppingCart->total, 2) }}
                    </td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->

@endsection

@section('page-scripts')
@endsection