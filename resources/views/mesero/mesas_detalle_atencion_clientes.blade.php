@extends('layouts.app_meseros', [
    'class' => '',
    'elementActive' => 'mesas'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="" >
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <img src="{{ asset('paper/img/mesas.png') }}" class="img-fluid">
                                        </div>
                                        <div class="col-lg-6 text-center mt-4">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label style="font-size: 30px">Mesa 1</label>
                                                </div>
                                                <div class="col-lg-12">
                                                    <span class="badge bg-success text-dark">Activa</span>
                                                </div>
                                                <div class="col-lg-12">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <hr>
                                        </div>
                                        <div class="col-lg-12">
                                            <span>Información</span>
                                        </div>
                                        <div class="col-lg-12">
                                            <label>Atiende: <strong>Alberto Lopez Aguilar</strong></label>
                                        </div>
                                        <div class="col-lg-12">
                                            <label>Fecha y hora de atención: <strong>{{now() }}</strong></label>
                                        </div>
                                        <div class="col-lg-12">
                                            <label>Numero de pedido: <strong>#231</strong></label>
                                        </div>
                                        <div class="col-lg-12">
                                            <label>Cobro de la orden    : <span class="badge badge-warning">Pendiente de cobro</span> </label>
                                        </div>
                                        <div class="col-lg-12">
                                            <label>Fecha y hora de cobro: <strong></strong></label>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Productos: <strong>6</strong></label>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Cuenta: <strong>$295</strong></label>
                                        </div>
                                        
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card card-stat">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <span>Pedidos realizados</span>
                            </div>
                            <div class="col-lg-12 mt-2">
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Categoria</th>
                                            <th>Producto</th>
                                            <th>Cantidad</th>
                                            <th>Costo</th>
                                            <th>Estatus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Bebidas</td>
                                            <td>Tizana frutos rojos</td>
                                            <td>2</td>
                                            <td>$70</td>
                                            <td> <span class="badge badge-success">Entregado</span> </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Bebidas</td>
                                            <td>Limonada</td>
                                            <td>1</td>
                                            <td>$40</td>
                                            <td> <span class="badge badge-success">Entregado</span> </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Comidas</td>
                                            <td>Hamburguesa</td>
                                            <td>1</td>
                                            <td>$120</td>
                                            <td> <span class="badge badge-warning">En preparación</span> </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Comidas</td>
                                            <td>Chapata de jamon</td>
                                            <td>1</td>
                                            <td>$65</td>
                                            <td> <span class="badge badge-danger">Cancelada</span> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-12">
                                <hr>
                            </div>
                            <div class="col-lg-4 text-center">
                               
                            </div>
                            <div class="col-lg-4 text-center">
                                <span>Productos: <strong>5</strong></span>
                            </div>
                            <div class="col-lg-4 text-center">
                                <span>Costo total: <strong>$295</strong></span>
                            </div>
                            <div class="col-lg-12">
                                <hr>
                            </div>
                            <div class="col-lg-12">
                                <button class="btn btn-primary"><i class="fas fa-cash-register"></i> Realizar cobro</button>
                                <button class="btn btn-secondary"><i class="fas fa-print"></i> Imprimir ticket</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
            demo.initChartsPages();
        });
    </script>
@endpush