@extends('layouts.app_meseros', [
    'class' => '',
    'elementActive' => 'pedidos'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-lg-12">
                                Pedidos en cocina
                            </div>  
                            <hr>
                            <div class="col-lg-12 table-responsive">
                                <table class="table  table-striped table-hover text-sm text-center">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Mesa</th>
                                            <th># Pedido</th>
                                            <th>Solicitado</th>
                                            <th>Estatus</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>3</td>
                                            <td>23</td>
                                            <td>Alberto</td>
                                            <td>
                                                <span class="badge badge-warning">En proceso</span>
                                            </td>
                                            <td>
                                                <button class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Ver detalles"><i class="fas fa-eye"></i> </button>
                                                <button class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Editar orden"><i class="fas fa-edit"></i> </button>
                                                <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Cancelar pedido"><i class="fas fa-ban"></i> </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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