@extends('layouts.app_meseros', [
    'class' => '',
    'elementActive' => 'menu'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="{{ route('menu_detalles_atencion_clientes', ['eleccion' => 'bebidas']) }}" >
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <img src="{{ asset('paper/img/chocolate-caliente.png') }}" class="img-fluid">
                                        </div>
                                        <div class="col-lg-6 text-center mt--4">
                                            <label style="font-size: 30px">Bebidas</label>
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
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="" >
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <img src="{{ asset('paper/img/emparedado.png') }}" class="img-fluid">
                                        </div>
                                        <div class="col-lg-6 text-center mt--4">
                                            <label style="font-size: 30px">Comidas</label>
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
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="" >
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <img src="{{ asset('paper/img/panna-cotta.png') }}" class="img-fluid">
                                        </div>
                                        <div class="col-lg-6 text-center mt--4">
                                            <label style="font-size: 30px">Postres</label>
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
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="" >
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <img src="{{ asset('paper/img/cerveza.png') }}" class="img-fluid">
                                        </div>
                                        <div class="col-lg-6 text-center mt--4">
                                            <label style="font-size: 30px">Cervezas</label>
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
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="" >
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <img src="{{ asset('paper/img/botella-de-vino.png') }}" class="img-fluid">
                                        </div>
                                        <div class="col-lg-6 text-center mt--4">
                                            <label style="font-size: 30px">Vinos</label>
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
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="" >
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <img src="{{ asset('paper/img/sal.png') }}" class="img-fluid">
                                        </div>
                                        <div class="col-lg-6 text-center mt--4">
                                            <label style="font-size: 30px">Extras</label>
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