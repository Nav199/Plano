@extends('layout.app')
@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <!-- Login container -->
        <div class="row border rounder-5 p-3 bg-white shadow box-area">
            <!-- Left Box -->
            <div class="col-md-6 rounder-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: rgba(21, 25, 41, 1);">

                <div class="featured-image mb-3s">
                    <img src="image/Login.png" class="img-fluid" style="width: 50; height: 50;">
                </div>
                <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace;">Olá</p>
                <small class="text-white text-wrap text-center" style="width: 17rem; font-family: 'Courier New', Courier, monospace;">Venha fazer seu Plano de Negócios de uma maneira fácil!</small>
            </div>
            <!-- Right Box -->
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <p>Hello</p>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email" name="email" id="email">
                    </div>
                    <div class="input-group mb-1">
                        <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="password" name="password" id="password">
                    </div>
                    <div class="input-group mb-5 d-flex justify-content-betwwen">
                        <div class="forgot">
                            <small>
                                <a href="">Esqueceu a senha</a>
                            </small>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-primary w-100 fs-6">Login</button>

                    </div>
                    <div class="row">
                        <small>Não possui conta? <a href="{{route ('cadastro-index')}}">Cadastre-se</a></small>
                    </div>
                </div>

            </div>
        </div>
    </div>
<link href="{{ asset('css/cadastro.css') }}" rel="stylesheet">
@endsection
