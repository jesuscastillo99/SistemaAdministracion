@extends('layouts.app')

@section('title', 'Iniciar sesión - Sistema de Cartera')

@section('content')

<div class="login-page">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-12 col-sm-10 col-md-7 col-lg-5 col-xl-4">

                <div class="login-card">

                    {{-- ===================================================== --}}
                    {{-- ENCABEZADO DEL LOGIN --}}
                    {{-- ===================================================== --}}

                    <div class="login-card-header text-center">

                        <div class="login-logo-wrapper">

                            <img
                                src="{{ asset('images/logo-itabec.png') }}"
                                alt="ITABEC"
                                class="login-logo"
                            >

                        </div>

                        <h1 class="login-title">
                            Sistema de 
                        </h1>

                        <p class="login-subtitle">
                            Departamento 
                        </p>

                    </div>


                    {{-- ===================================================== --}}
                    {{-- CONTENIDO --}}
                    {{-- ===================================================== --}}

                    <div class="login-card-body">

                        <div class="text-center mb-4">

                            <h2 class="login-welcome">
                                Iniciar sesión
                            </h2>

                            <p class="text-muted mb-0">
                                Ingresa tus credenciales para continuar
                            </p>

                        </div>


                        {{-- ================================================= --}}
                        {{-- MENSAJES DE ERROR --}}
                        {{-- ================================================= --}}

                        @if ($errors->any())

                            <div
                                class="alert login-alert mb-4"
                                role="alert"
                            >

                                {{ $errors->first() }}

                            </div>

                        @endif


                        {{-- ================================================= --}}
                        {{-- FORMULARIO --}}
                        {{-- ================================================= --}}

                        <form
                            method="POST"
                            action="{{ route('login.attempt') }}"
                        >

                            @csrf


                            {{-- ============================================= --}}
                            {{-- USUARIO --}}
                            {{-- ============================================= --}}

                            <div class="mb-3">

                                <label
                                    for="usuario"
                                    class="form-label login-label"
                                >
                                    Usuario
                                </label>

                                <input
                                    type="text"
                                    name="usuario"
                                    id="usuario"
                                    value="{{ old('usuario') }}"
                                    class="form-control login-input"
                                    placeholder="Ingresa tu usuario"
                                    required
                                    autofocus
                                    autocomplete="username"
                                >

                            </div>


                            {{-- ============================================= --}}
                            {{-- CONTRASEÑA --}}
                            {{-- ============================================= --}}

                            <div class="mb-4">

                                <label
                                    for="password"
                                    class="form-label login-label"
                                >
                                    Contraseña
                                </label>

                                <input
                                    type="password"
                                    name="password"
                                    id="password"
                                    class="form-control login-input"
                                    placeholder="Ingresa tu contraseña"
                                    required
                                    autocomplete="current-password"
                                >

                            </div>


                            {{-- ============================================= --}}
                            {{-- BOTÓN DE ACCESO --}}
                            {{-- ============================================= --}}

                            <div class="d-grid">

                                <button
                                    type="submit"
                                    class="btn login-button"
                                >
                                    Iniciar sesión
                                </button>

                            </div>

                        </form>

                    </div>


                    {{-- ===================================================== --}}
                    {{-- PIE DEL LOGIN --}}
                    {{-- ===================================================== --}}

                    <div class="login-card-footer text-center">

                        <small>
                            Cualquier duda o aclaración con el sistema, contactar al administrador.
                        </small>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection