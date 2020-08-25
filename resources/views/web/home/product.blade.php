@extends('web.layouts.app')
@section('title', 'Polo cuello camisa para adulto')

@section('main-content')
<div class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset('storage/cuello-v-1.jpg') }}" alt="First slide" height="500">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('storage/cuello-v-3.jpg') }}" alt="Second slide" height="500">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('storage/cuello-v-4.jpg') }}" alt="Third slide" height="500">
                        </div>
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-between">
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                        <i class="fas fa-angle-left"></i>
                        <!-- <span class="sr-only">Previous</span> -->
                    </a>
                    <ol class="carousel-indicators mb-0">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span> -->
                        <i class="fas fa-angle-right"></i>
                    </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <h2>Polo Cuello V - Talla S</h2>
                <div class="my-3">
                    ¡Aún hay disponibles!
                </div>
                <div class="my-3">S/. 50.00</div>
                <div class="my-4">
                    <h2>Color</h2>
                    <ul class="div-colores d-flex flex-row justify-content-center p-0">
                        <li>
                            <a href="#">
                                <span style="background-color: #abcdef"></span>
                            </a>
                        </li>
                    </ul>  
                </div>
                <a class="btn btn-bgorange px-4" data-toggle="modal" data-target="#shoppingCart" href="#" onclick="addToCart()">COMPRAR</a>
                <div class="py-3">
                    <a class="text-dark mr-1" href="#"><i class="fas fa-plus text-orange mr-1"></i>Ver especificaciones</a>
                    <span class="text-orange mr-1">|</span>
                    <a class="text-dark" href="#" onclick="addToCart()">
                        Agregar al carrito
                        <i class="fas fa-star text-orange ml-1" style="font-size:.7rem"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

{{--
<!-- Modal -->
<div class="modal fade" id="shoppingCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-white" style="background-color:#000">
            <h5 class="modal-title m-auto">¡Has añadido el producto al carrito!</h5>
            <button type="button" class="close p-0 m-0" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body"> 
            <div class="d-flex divElemento-agregado">
                <div class="d-flex col-md-8">
                    <img src="{{ asset($product_photos[0]->image_url) }}" alt="" style="width:45%">
                    <div class="mt-3">
                        <h4>{{ $product->name }} {{ $product_price->capacity->symbol }} - {{ $this_color->name }}</h4>
                        <p class="text-orange">S/. {{ number_format($product_price->value, 2) }}</p> 
                        <p>Cantidad: 1</p>   
                    </div>
                </div>
                <div class="col-md-4 cart-info p-0">
                    <h5 class="py-3 px-4 text-center text-white">Resumen del carrito</h5>
                    @foreach(Cart::content() as $row)
                        <div class="py-2 px-2">
                            <p>
                                {{ $row->name }}
                                <br>
                                <small>{{ $row->qty }} artículos</small>
                                <br>
                                <small>Total: S/. {{ number_format($row->subtotal, 2) }}</small>
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="progressBar-container text-center col-md-6 m-auto">
                <p>¡Tu envío es gratis!</p>
                <div>
                    <p class="initial-value">S/0</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="goal-value">S/100</p>
                </div>
            </div>
        </div>
        <div class="modal-footer text-center m-auto border-0">
            <a class="btn btn-orange mr-3" href="/">SEGUIR COMPRANDO</a>
            <a class="btn btn-bgorange ml-3" href="{{ route('web.home.checkout-cart') }}">FINALIZAR COMPRA</a>
        </div>
        </div>
    </div>
</div>
--}}
@endsection

@section('page-scripts')
<script>
    function addToCart()
    {
        alert('¡Agregado al carrito!');
    }
</script>
@endsection