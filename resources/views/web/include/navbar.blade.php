<nav class="navbar navbar-expand-lg navbar-light bg-black">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="/">
                        <strong>Tienda XXXX</strong><span class="sr-only">(current)</span>
                    </a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                {{--<span class="mr-2"><img src="{{ asset('images/icon-search.png') }}" alt="" style="width: 1.5rem;"></span>--}}
                <button type="button" class="cart-icon button bg-transparent border-0 text-orange" data-toggle="modal" data-target="#shoppingCart1" href="#"><i class="fas fa-shopping-cart i-cart"></i></button>
            </form>
        </div>
    </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="shoppingCart1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-cart" role="document">
        <div class="modal-content">
            <table class="table table-borderless">
                <thead class="border-0">
                    <tr>
                        <th scope="col">Producto</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">
                            <img src="{{ asset('storage/cuello-v-1.jpg') }}" alt="" style="max-width:3rem">
                        </td>
                        <td>
                            Polo cuello V - Talla S
                        </td>
                        <td>
                            S/. 50.00
                        </td>
                        <td class="d-flex flex-wrap-reverse">
                            <input type="text" title="Cantidad" class="cantidad input-cantidad" value="2" readonly="">
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">
                            <img src="{{ asset('storage/cuello-v-2.jpg') }}" alt="" style="max-width:3rem">
                        </td>
                        <td>
                            Polo cuello V - Multicolor
                        </td>
                        <td>
                            S/. 20.00
                        </td>
                        <td class="d-flex flex-wrap-reverse">
                            <input type="text" title="Cantidad" class="cantidad input-cantidad" value="3" readonly="">
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="progressBar-container content-bar text-center d-flex flex-column justify-content-center align-items-center p-4">
                <p>¡Tu envío es gratis!</p>
                <div>
                    <p class="initial-value1">S/. 0</p>
                    <div class="progress bar-progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="goal-value1">S/. 10</p>
                </div>
            </div>
            <div class="d-flex flex-row p-3 align-items-center">
                <div class="">
                    <span>Total: </span>
                    <span class="cartTotalValue">S/. 160.00</span>
                </div>
                <a class="btn btn-bgorange ml-auto" href="{{ route('web.home.cart-section') }}">PAGAR</a>
            </div>
        </div>
    </div>
</div>

{{--
<!-- Modal -->
<div class="modal fade" id="shoppingCart1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-cart" role="document">
        <div class="modal-content">
            <table class="table table-borderless">
                <thead class="border-0">
                    <tr>
                        <th scope="col">Producto</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(Cart::content() as $row)
                        <tr>
                            <td scope="row">
                                <img src="{{ asset(\App\ProductPhoto::where('product_id', '=', $row->id)->where('color_id', '=', \App\Color::where('name', '=', $row->options->color)->first()->id)->first()->image_url) }}" alt="" style="max-width:3rem">
                            </td>
                            <td>
                                {{ $row->name }}
                            </td>
                            <td>
                                S/. {{ number_format($row->price, 2) }}
                            </td>
                            <td class="d-flex flex-wrap-reverse">
                                <input type="text" title="Cantidad" class="cantidad input-cantidad" value="{{ $row->qty }}" readonly="">
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="progressBar-container content-bar text-center d-flex flex-column justify-content-center align-items-center p-4">
                <p>¡Tu envío es gratis!</p>
                <div>
                    <p class="initial-value1">S/. 0</p>
                    <div class="progress bar-progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="goal-value1">S/. 10</p>
                </div>
            </div>
            <div class="d-flex flex-row p-3 align-items-center">
                <div class="">
                    <span>Total: </span>
                    <span class="cartTotalValue">S/. {{ Cart::subtotal() }}</span>
                </div>
                <a class="btn btn-bgorange ml-auto" href="">PAGAR</a>
            </div>
        </div>
    </div>
</div>

--}}