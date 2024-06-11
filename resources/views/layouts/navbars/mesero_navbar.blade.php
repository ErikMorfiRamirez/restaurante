<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ asset('paper') }}/img/logo-small.png">
            </div>
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            {{ __('Restaurante') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="col-lg-12 text-center mt-2">
            <h5>Menú general</h5>
        </div>
        <ul class="nav">
            <li class="{{ $elementActive == 'dashboard' ? 'active' : '' }}">
                <a href="{{ Route('atencion_clientes') }}">
                    <i class="fas fa-home"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'menu' ? 'active' : '' }}">
                <a href="{{ Route('menu_atencion_clientes') }}">
                    <i class="fas fa-list-alt"></i>
                    <p>{{ __('Menú') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'mesas' ? 'active' : '' }}">
                <a href="{{ Route('mesas_atencion_clientes') }}">
                    <i class="fas fa-chair"></i>
                    <p>{{ __('Mesas') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'pedidos' ? 'active' : '' }}">
                <a href="{{ Route('pedidos_atencion_clientes') }}">
                    <i class="fas fa-clock"></i>
                    <p>{{ __('Pedidos') }}</p>
                </a>
            </li>
        
        </ul>
    </div>
</div>
