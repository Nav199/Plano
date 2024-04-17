@extends('layout.app')
@section('content')   
<div class="container mt-5">
    <h2 class="text-center text-white p-2">Estoque</h2>
    <form action="" method="post">
        <table class="table table-dark table-striped-columns text-center pt-2" id="tabela-estoque">
            <thead>
                <tr>
                    <th><button class="btn btn-primary" type="button" onclick="adicionarLinha()">Adicionar Item</button></th>
                    <th>Descrição</th>
                    <th>Quantidade</th>
                    <th>Valor</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody class="table table-dark table-striped-columns text-center">
                <tr>
                    <td><button class="btn btn-danger" type="button" onclick="deletarLinha(this)">Remover</button></td>
                    <td><input type="text" class="form-control" name="descricao[]"></td>
                    <td><input type="number" class="form-control" name="quantidade[]" oninput="calcularSubtotal(this)"></td>
                    <td><input type="number" class="form-control" name="valor[]" oninput="calcularSubtotal(this)"></td>
                    <td><input type="text" class="form-control" name="subtotal[]" readonly></td>
                </tr>
            </tbody>
        </table>
        <div class="mt-3 text-white">
            <label>Total: R$ <span id="total">0.00</span></label>
        </div>
        <input type="hidden" name="tabelajson" id="tabela_json" value="">
        <button type="submit" class="btn btn-primary btn-block">Enviar</button>
    </form>
</div>

<script src="{{ asset('js/estoque.js') }}"></script>
@endsection
