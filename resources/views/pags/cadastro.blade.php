@extends('layout.app')
@section('content')
    <div class="container">
                <form action="">
                    <div class="form-group">
                        <div class="mb-3">
                            <h2 class="text-center">Cadastro</h2>
                            <label for="nome" class="form-label mt-4">Nome</label>
                            <input type="text" class="form-control" id="nome" name="name" placeholder="Digite seu nome">
                        </div>
                        <div class="mb-3">
                            <label for="cpf" class="form-label">CPF</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite seu cpf">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <input type="submit" class="btn btn-primary btn-block" value="Cadastrar">
                    </div>
                </form>
    </div>
@endsection
