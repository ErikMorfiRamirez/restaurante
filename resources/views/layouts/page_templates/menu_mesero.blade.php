<div class="wrapper">

    @include('layouts.navbars.mesero_navbar')

    <div class="main-panel">
        @include('layouts.navbars.navs.nav_meseros')
        @yield('content')
        @include('layouts.footer')
    </div>
</div>