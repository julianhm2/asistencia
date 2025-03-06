<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg" style="background-color: #2C2C3E;">
    <div class="container">
        <a class="navbar-brand text-white" href="#">Asistencia QR</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Historial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Configuración</a>
                </li>

                <!-- Dropdown de Usuario con Jetstream -->
                @auth <!-- Verifica si el usuario está autenticado -->
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <li class="nav-item position-relative" x-data="{ open: false }">
                            <!-- Botón del Dropdown -->
                            <a @click="open = !open" class="nav-link d-flex align-items-center text-white" href="#"
                                role="button">
                                <img class="rounded-circle border border-white" width="35" height="35"
                                    src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                            </a>

                            <!-- Menú del Dropdown -->
                            <div x-show="open" @click.away="open = false" class="bg-dark text-white"
                                style="position: absolute; z-index: 1000; top: 100%; right: 0; min-width: 150px; border-radius: 5px; padding: 10px;">
                                <a class="d-block text-white py-2 px-3" href="{{ route('profile.show') }}">Perfil</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="d-block w-100 text-start text-danger py-2 px-3 bg-transparent border-0" 
                                            onclick="event.preventDefault(); this.closest('form').submit(); window.location.href = '/';">
                                        Cerrar Sesión
                                    </button>
                                </form>
                            </div>
                        </li>
                    @endif
                @endauth
            </ul>
        </div>
    </div>
</nav>