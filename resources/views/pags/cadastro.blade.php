@extends('layout.app')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <!-- Formulário de cadastro -->
            <form class="login-form" id="cadastroForm" method="POST" action="{{ route('cadastro-store') }}">
                @csrf <!-- Adiciona o token CSRF para proteção contra CSRF -->
                <div class="form-group">
                    <label for="nome" style="color: white;">Nome</label>
                    <input type="text" class="form-control" id="nome" name="name" required>
                </div>
                <div class="form-group">
                    <label for="cpf" style="color: white;">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" required>
                </div>
                <div class="form-group">
                    <label for="email" style="color: white;">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="senha" style="color: white;">Senha</label>
                    <input type="password" class="form-control" id="senha" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
            </form>
        </div>
    </div>
</div>


@endsection
