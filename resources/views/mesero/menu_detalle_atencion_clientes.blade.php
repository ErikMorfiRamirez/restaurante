@extends('layouts.app_meseros', [
    'class' => '',
    'elementActive' => 'menu',
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3>Menú - Bebidas</h3>
                                <hr>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card mb-3" style="max-width: 540px;">
                                            <div class="row no-gutters">
                                                <div class="col-md-4 text-center">
                                                    <img src="{{ asset('paper/img/chocolate-caliente.png') }}" class="img-fluid"
                                                        alt="bebidas">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <h5 class="card-title">Café Caliente Latte</h5>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <p class="card-text text-justify">
                                                                    Disfruta de nuestro delicioso café caliente Latte, preparado con
                                                                    una combinación
                                                                    perfecta de espresso y leche vaporizada, coronado con una ligera
                                                                    capa de espuma.
                                                                    Ideal para comenzar tu día con energía o para una pausa
                                                                    relajante en la tarde.
                                                                </p>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <button type="button" class="btn btn-primary btn-sm col-lg-12" data-toggle="modal" data-target="#modelId">
                                                                    Agregar a pedido
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
            <div class="col-lg-12">
                <!-- Button trigger modal -->
                
                
                <!-- Modal -->
                <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Agregar a pedido</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        Mesa:
                                        <select class="form-control">
                                            <option value="">Selecciona: </option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        Cantidad:
                                        <input type="number" step="1" min="0" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <button type="button" class="btn btn-success">Agregar</button>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
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
