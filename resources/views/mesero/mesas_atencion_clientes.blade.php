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
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6 col-md-6">
                                        <img src="{{ asset('paper/img/mesas.png') }}" class="img-fluid">
                                    </div>
                                    <div class="col-lg-6 text-center mt--4">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <label style="font-size: 30px">Mesa 1</label>
                                            </div>
                                            <div class="col-lg-12">
                                               <span class="badge bg-success text-dark">Activa</span>
                                                <hr>
                                            </div>
                                            <div class="col-lg-12">
                                                <a class="btn btn-primary col" href="{{ Route('mesas_atencion_clientes_detalle') }}">Detalles</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                            <img src="{{ asset('paper/img/mesas.png') }}" class="img-fluid">
                                        </div>
                                        <div class="col-lg-6 text-center mt--4">
                                            <label style="font-size: 30px">Mesa 2</label>
                                            <span class="badge bg-danger text-dark">Inactiva</span>
                                            <hr>
                                            <button class="btn btn-outline-secondary col">Atender</button>
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
                                            <img src="{{ asset('paper/img/mesas.png') }}" class="img-fluid">
                                        </div>
                                        <div class="col-lg-6 text-center mt--4">
                                            <label style="font-size: 30px">Mesa 3</label>
                                            <span class="badge bg-danger text-dark">Inactiva</span>
                                            <hr>
                                            <button class="btn btn-outline-secondary col">Atender</button>
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