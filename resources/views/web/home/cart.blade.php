@extends('web.layouts.app')
@section('title', 'Confirma tu compra')

@section('main-content')
<section class="signup-step-container">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="wizard">
                        <div class="wizard-inner">
                            <div class="connecting-line"></div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1 </span> <i>RESUMEN DE LA COMPRA</i></a>
                                    <div>
                                        
                                    </div>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false"><span class="round-tab">2</span> <i>INGRESA TU E-MAIL</i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"><span class="round-tab">3</span> <i>ENVÍO Y PAGO</i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab"><span class="round-tab">4</span> <i>PEDIDO CONFIRMADO</i></a>
                                </li>
                            </ul>
                        </div>
        
                        <form action="#" role="form" class="login-box">
                            @csrf
                            <div class="tab-content" id="main_form">

                                <!-- STEP 1 -->
                                <div class="tab-pane active" role="tabpanel" id="step1">
                                        <div class="content-cart">
                                            {{--<div class="text-right py-3 px-2"><button type="button"  class="default-btn btn-bgorange next-step">FINALIZAR COMPRA</button></div>--}}
                                            <div>
                                                <table class="table table-borderless">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col"></th>
                                                            <th scope="col">PRODUCTO</th>
                                                            <th scope="col">ENVÍO</th>
                                                            <th scope="col">PRECIO</th>
                                                            <th scope="col">CANTIDAD</th>
                                                            <th scope="col">TOTAL</th>
                                                            <th scope="col"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <tr>
                                                            <td scope="row">
                                                                <!-- check out the color -->
                                                                <img src="{{ asset('storage/cuello-v-1.jpg') }}" alt="" style="max-width: 5rem;">
                                                            </td>
                                                            <td>
                                                                <a class="text-orange" href="#">Polo cuello V - talla S</a>
                                                                <div class="d-flex flex-column">
                                                                    <span>Talla S</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                a calcular
                                                            </td>
                                                            <td>
                                                                S/. 50.00
                                                            </td>
                                                            <td class="d-flex flex-row align-items-center">
                                                                <a href="#">
                                                                    <i class="fas fa-minus"></i>
                                                                </a>
                                                                <input type="text" class="cantidad-elementos text-center" value="2" readonly>
                                                                <a href="#">
                                                                    <i class="fas fa-plus ml-2"></i>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                S/. 100.00</span>
                                                            </td>
                                                            <td>
                                                                <a href="#">
                                                                    <i class="fas fa-times eliminar-producto"></i>
                                                                </a>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td scope="row">
                                                                <!-- check out the color -->
                                                                <img src="{{ asset('storage/cuello-v-2.jpg') }}" alt="" style="max-width: 5rem;">
                                                            </td>
                                                            <td>
                                                                <a class="text-orange" href="#">Polo cuello V - Multicolor</a>
                                                                <div class="d-flex flex-column">
                                                                    <span>Talla M</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                a calcular
                                                            </td>
                                                            <td>
                                                                S/. 20.00
                                                            </td>
                                                            <td class="d-flex flex-row align-items-center">
                                                                <a href="#">
                                                                    <i class="fas fa-minus"></i>
                                                                </a>
                                                                <input type="text" class="cantidad-elementos text-center" value="3" readonly>
                                                                <a href="#">
                                                                    <i class="fas fa-plus ml-2"></i>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                S/. 60.00</span>
                                                            </td>
                                                            <td>
                                                                <a href="#">
                                                                    <i class="fas fa-times eliminar-producto"></i>
                                                                </a>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    <ul class="list-inline pull-right">
                                        <a class="text-orange mr-3" href="/"><small>Elegir más productos</small></a>
                                        <li><button type="button" class="default-btn btn-bgorange next-step">CONTINUAR</button></li>
                                    </ul>
                                </div>
                                <!-- end STEP 1 -->

                                <!-- STEP 2 -->
                                <div class="tab-pane client-pre-email" role="tabpanel" id="step2">
                                    <div class="text-right"><small><a class="text-orange" href="">Volver a carrito</a></small></div>
                                    <div class="d-flex flex-column justify-content-center align-items-center col-lg-8 col-md-12 m-auto py-2">
                                        <div class="d-flex flex-lg-row flex-column align-items-center m-auto pb-3 text-center">
                                            <h3>Ingresa tu mail para continuar la compra.</h3>
                                            <span>Rápido. Fácil. Seguro.</span>
                                        </div>
                                        <div class="input-group input-group-lg mb-3">
                                            <input name="email" id="email-pre-purchase" type="email" oninput="validateSyntax(this)" class="form-control" placeholder="sucorreo@correo.com" aria-label="Recipient's username" aria-describedby="button-addon2">
                                            <div class="input-group-append">
                                                <button id="send-mail-button" class="default-btn next-step btn-bgorange" disabled>Continuar</button>
                                            </div>
                                        </div>
                                        <div class="text-center px-lg-5 py-4">
                                            <small>¡Estas a un paso de adquirir el producto que quieres! iShop te recuerda que todas las entregas realizadas por tienda Online son certificadas, es importante que tengas en cuenta que la entrega del pedido se hará únicamente al trajetahabiente o titular de la tarjeta que registra en la compra
                                            (usuario de la tarjeta de crédito y/o débito) <a class="text-orange" href="">*Ver información sobre esta política ingresa al siguiente Link.</a></small>
                                        </div>
                                    </div>
                                </div>
                                <!-- end STEP 2 -->

                                <!-- STEP 3 -->
                                <div class="tab-pane" role="tabpanel" id="step3">
                                    <div class="row">
                                        <div class="client-profile col-md-4 pb-3">
                                            <div>
                                                <div class="col-md-12 px-0 py-3">
                                                    <div><i class="fas fa-user"></i>Identificación</div>
                                                    <small>Solicitamos únicamente la información esencial para la finalización de la compra.</small>
                                                </div>
                                                <div class="form-group col-md-12 px-0">
                                                    <label for="exampleInputEmail1">Correo</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" disabled>
                                                </div>
                                                <div class="form-group col-md-12 px-0">
                                                    <label for="inputName">Nombre</label>
                                                    <input name="name" type="text" class="form-control" placeholder="" required>
                                                </div>
                                                <div class="form-group col-md-12 px-0">
                                                    <label for="inputLastName">Apellidos</label>
                                                    <input name="lastname" type="text" class="form-control" placeholder="" required>
                                                </div>
                                                <div class="form-group pr-3">
                                                    <label for="inputPhone">Teléfono/móvil</label>
                                                    <input name="phone" type="text" class="form-control" placeholder="99999999" required>
                                                </div>
                                                <div class="form-group col-md-10 px-0">
                                                    <label for="inputState">Tipo de documento</label>
                                                    <select name="document_type" class="form-control form-control-sm" required>
                                                        <option selected disabled>Selecciona un tipo de documento</option>
                                                        <option value="dni">DNI</option>
                                                        <option value="carne_extranjeria">Carné de Extranjería</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-8 px-0">
                                                    <label for="Document">Documento</label>
                                                    <input name="document_number" type="text" class="form-control" placeholder="Documento" required>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check d-flex">
                                                        <input name="agree" class="form-check-input" type="checkbox" id="gridCheck" required>
                                                        <label class="form-check-label" for="gridCheck"><small style="font-size:0.7rem">He leido y acepto los términos y condiciones, las políticas de privacidad y el tratamiento de datos personales.</small>
                                                        </label>
                                                    </div>
                                                </div>
                                                {{--
                                                <div class="d-flex">
                                                    <button type="submit" class="btn btn-bgorange ml-auto">CONTINUAR</button>
                                                </div>
                                                --}}
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="shipping-address col-md-10 p-3 mb-4">
                                                <div><i class="fas fa-home"></i>Dirección de envío</div>
                                                <small>Aún falta llenar con los datos</small>
                                            </div>
                                            <div class="payment-data col-md-12 p-3">
                                                <div><i class="fa fa-credit-card" aria-hidden="true"></i>Pago</div>
                                                <span>Aún falta llenar con los datos</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="d-flex flex-column">
                                                <h5>RESUMEN DE LA COMPRA</h5>
                                            </div>
                                            <div>
                                                <div class="py-3 mb-3 d-flex flex-row">
                                                    <img src="" alt="" style="max-width: 4rem;">
                                                    <div class="d-flex flex-column">
                                                        <span><small>Polo cuello V - talla S</small></span>
                                                        <span><small>Cantidad: 2</small></span>
                                                        <span class="ml-auto"><small>S/.100.00</small></span>
                                                    </div>   
                                                </div>
                                                <div class="py-3 mb-3 d-flex flex-row">
                                                    <img src="" alt="" style="max-width: 4rem;">
                                                    <div class="d-flex flex-column">
                                                        <span><small>Polo cuello V multicolor</small></span>
                                                        <span><small>Cantidad: 3</small></span>
                                                        <span class="ml-auto"><small>S/.60.00</small></span>
                                                    </div>   
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <button type="button" class="default-btn btn-bgorange ml-auto next-step">FINALIZAR COMPRA</button>
                                            </div>
                                        </div>
                                    </div>
                                    {{--
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn next-step">Continue</button></li>
                                    </ul>
                                    --}}
                                </div>
                                <!-- end STEP 3 -->

                                <!-- STEP 4 -->
                                <div class="tab-pane" role="tabpanel" id="step4">
                                    <ul class="list-inline pull-right">
                                        <li>
                                            <button type="button" style="background-color: #ffffff; color: orange;" class="default-btn prev-step">Atrás</button>
                                        </li>
                                        <li>
                                            <button type="submit" class="default-btn btn-bgorange next-step">Finalizar</button>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end STEP 4 -->

                                <div class="clearfix"></div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Alert modal -->
    <div id="alert-advice-container" style="display: none;">
        <div id="alert-advice" class="alert">
            <h3 id="alert-advice__title">¡Error!</h3>
            <p id="alert-advice__text">Debe haber por lo menos un producto.</p>
            <button class="btn-close-alert btn-bgorange" id="gotit">ACEPTAR</button>
        </div>
    </div>
    
@endsection

@section('page-scripts')
@endsection