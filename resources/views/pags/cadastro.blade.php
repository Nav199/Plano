@extends('layout.app')
@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <!-- Login container -->
    <div class="row border rounder-5 p-3 bg-white shadow box-area">
        <!-- Left Box -->
        <div class="col-md-6 rounder-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: rgba(21, 25, 41, 1);">

            <div class="featured-image mb-3s">
                <img src="{{ asset('image/Login.png') }}" class="img-fluid" style="width: 50; height: 50;">
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
                <form action="{{route('cadastro-store')}}" method="post">
                    @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Nome" name="name" id="name">
                </div>
                <div class="input-group mb-3">
                    <input type="number" class="form-control form-control-lg bg-light fs-6" placeholder="CPF" name="cpf" id="cpf">
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
                    <button type="submit" class="btn btn-lg btn-primary w-100 fs-6">Cadastre-se</button>
                </div>
            </form>
                <div class="row">
                    <small>Já possui Conta? <a href="{{route ('login')}}">Login</a></small>
                </div>
            </div>

        </div>
    </div>
</div>
<link href="{{ asset('css/cadastro.css') }}" rel="stylesheet">
@endsection
