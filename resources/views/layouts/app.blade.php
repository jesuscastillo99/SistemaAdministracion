<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        @yield('title', 'Sistema de ')
    </title>

    {{-- Icono mostrado en la pestaña del navegador --}}
    <link
        rel="icon"
        type="image/png"
        href="{{ asset('images/cartera.png') }}"
    >

    @vite([
        'resources/css/app.scss',
        'resources/js/app.js'
    ])

</head>

<body>

    {{-- ========================================================= --}}
    {{-- ENCABEZADO INSTITUCIONAL --}}
    {{-- ========================================================= --}}
    {{-- 
        Este encabezado se coloca en el layout porque forma parte
        de la identidad general del sistema y debe mostrarse antes
        de la barra de navegación en todas las vistas autenticadas.
    --}}

    @auth

        <header
            class="itabec-header d-flex flex-wrap align-items-center
                   justify-content-between px-3 py-3"
        >

            {{-- Logos institucionales --}}

            <div class="d-flex align-items-center gap-3 flex-wrap logos">

                <div class="d-flex align-items-center gap-2 logo-1">

                    <img
                        src="{{ asset('images/logo-tamaulipas.png') }}"
                        alt="Tamaulipas"
                        height="70"
                    >

                </div>


                <div class="vr d-none d-md-block"></div>


                <div class="d-flex align-items-center gap-2 logo-2">

                    <img
                        src="{{ asset('images/logo-secretaria.png') }}"
                        alt="Secretaría de Educación"
                        height="60"
                    >

                </div>


                <div class="vr d-none d-md-block"></div>


                <div class="d-flex align-items-center gap-2 logo-3">

                    <img
                        src="{{ asset('images/logo-itabec.png') }}"
                        alt="ITABEC"
                        height="60"
                    >

                </div>

            </div>


            {{-- Nombre del sistema --}}

            <div class="header-title text-end">

                <h3 class="mb-0 fw-bold">
                    Sistema
                </h3>

                <h3 class="mb-0 fw-bold">
                    Nombre del Sistema
                </h3>

            </div>

        </header>


        {{-- ===================================================== --}}
        {{-- BARRA DE NAVEGACIÓN --}}
        {{-- ===================================================== --}}

        <nav class="navbar navbar-expand-lg navbar-cartera shadow-sm">

            <div class="container">

                {{-- 
                    En móvil podemos mostrar un nombre corto
                    como marca de la navegación.
                --}}

                <a
                    class="navbar-brand d-lg-none"
                    href="{{ route('dashboard') }}"
                >
                    Cartera
                </a>


                {{-- Botón hamburguesa para dispositivos móviles --}}

                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarPrincipal"
                    aria-controls="navbarPrincipal"
                    aria-expanded="false"
                    aria-label="Mostrar navegación"
                >

                    <span class="navbar-toggler-icon"></span>

                </button>


                <div
                    class="collapse navbar-collapse"
                    id="navbarPrincipal"
                >

                    {{-- ========================================= --}}
                    {{-- OPCIONES PRINCIPALES --}}
                    {{-- ========================================= --}}

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        {{-- EXPEDIENTES --}}

                        <li class="nav-item">

                            <a
                                class="nav-link
                                    {{ request()->routeIs(
                                        'dashboard',
                                        'solicitud.index'
                                    ) ? 'active' : '' }}"
                                href="{{ route('dashboard') }}"
                            >
                                Inicio
                            </a>

                        </li>


                       

                    </ul>


                    {{-- ========================================= --}}
                    {{-- USUARIO Y CERRAR SESIÓN --}}
                    {{-- ========================================= --}}

                    <div class="d-flex align-items-center gap-3 navbar-user">

                        <span class="navbar-username">

                            {{ auth()->user()->nombre }}

                        </span>


                        <form
                            method="POST"
                            action="{{ route('logout') }}"
                            class="m-0"
                        >

                            @csrf

                            <button
                                type="submit"
                                class="btn btn-logout btn-sm"
                            >
                                Cerrar sesión
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </nav>

    @endauth


    {{-- ========================================================= --}}
    {{-- CONTENIDO DE CADA VISTA --}}
    {{-- ========================================================= --}}

    <div class="container-fluid px-0">

        @yield('content')

    </div>

</body>

</html>