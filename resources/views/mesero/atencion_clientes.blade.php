@extends('layouts.app_meseros', [
    'class' => '',
    'elementActive' => 'dashboard'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="{{ Route('menu_atencion_clientes') }}" >
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <img src="{{ asset('paper/img/menu.png') }}" class="img-fluid">
                                        </div>
                                        <div class="col-lg-6 text-center mt--4">
                                            <label style="font-size: 30px">Menú</label>
                                            <hr>
                                            <button class="btn btn-primary col">Ver</button>
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
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="{{ Route('mesas_atencion_clientes') }}" >
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <img src="{{ asset('paper/img/restaurante.png') }}" class="img-fluid">
                                        </div>
                                        <div class="col-lg-6 text-center mt--4">
                                            <label style="font-size: 30px">Mesas</label>
                                            <hr>
                                            <button class="btn btn-primary col">Ver</button>
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
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="{{ Route('pedidos_atencion_clientes') }}" >
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <img src="{{ asset('paper/img/cocina.png') }}" class="img-fluid">
                                        </div>
                                        <div class="col-lg-6 text-center mt--4">
                                            <label style="font-size: 30px">Pedidos</label>
                                            <hr>
                                            <button class="btn btn-primary col">Ver</button>
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