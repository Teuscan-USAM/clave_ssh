<nav class="site-nav" aria-label="Navegación principal">
    <a class="brand" href="{{ url('/') }}">SSH<span>/</span>TOOL</a>
    <div class="nav-links">
        <a class="nav-link {{ request()->is('/') ? 'is-active' : '' }}" href="{{ url('/') }}">Claves SSH</a>
        <a class="nav-link {{ request()->is('soporte') ? 'is-active' : '' }}" href="{{ url('/soporte') }}">Soporte técnico</a>
        <a class="nav-link {{ request()->is('siap') ? 'is-active' : '' }}" href="{{ url('/siap') }}">Sistemas SIAP</a>
    </div>
</nav>
 