@extends('layout.app')
@section('content')   
<h2 class="text-center text-white">Plano Financeiro</h2>
<h3 class="text-center text-white p-4 mt-5">Investimento Fixo</h3>
<div class="container mt-5">
    <form action="/Investimento-Fixo" method="post">
        <h4 class="text-white">Máquina e Equipamentos</h4>
        <table class="table table-dark table-striped-columns text-center" id="Tabela_01">
            <thead>
                <tr>
                    <th><button type="button" class="btn btn-success" style="text-align: center;" onclick="adicionarLinha()">+</button></th>
                    <th>Descrição</th>
                    <th>Quantidade</th>
                    <th>Valor Unitário</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table table-dark table-striped-columns text-center">
                    <td><button type="button" class="btn btn-danger" onclick="deletarLinha(this)">Deleta</button></td>
                    <td><input type="text" name="descricao[]" id="descricao_1"></td>
                    <td><input type="number" name="quantidade[]" id="quantidade_1" oninput="calcularTotal(1)"></td>
                    <td><input type="number" name="valor_unitario[]" id="valor_unitario_1" oninput="calcularTotal(1)"></td>
                    <td><input type="number" name="total[]" id="total_1" readonly></td>
                </tr>
            </tbody>
            <tr class="table-subtotal">
                <th>Subtotal(A)</th>
                <td class="d-none"></td>
                <td class="d-none"></td>
                <td class="d-none"></td>
                <td><input type="number" name="subtotal" id="subtotal" readonly></td>
            </tr>
        </table>

        <br>
        <h4 class="text-white">Móveis e utensílios</h4>
        <table class="table table-dark table-striped-columns text-center" id="Tabela_02">
            <thead>
                <tr>
                    <th><button type="button" class="btn btn-success" style="text-align: center;" onclick="adicionarLinha_2()">+</button></th>
                    <th>Descrição</th>
                    <th>Quantidade</th>
                    <th>Valor Unitário</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table table-dark table-striped-columns text-center">
                    <td><button type="button" class="btn btn-danger" onclick="deletarLinha_2(this)">Deletar</button></td>
                    <td><input type="text" name="descricao_2[]" id="descricao_2_1"></td>
                    <td><input type="number" name="quantidade_2[]" id="quantidade_2_1" oninput="calcularTotal_2(1)"></td>
                    <td><input type="number" name="valor_unitario_2[]" id="valor_unitario_2_1" oninput="calcularTotal_2(1)"></td>
                    <td><input type="number" name="total_2[]" id="total_2_1" readonly></td>
                </tr>
            </tbody>
            <tr class="table-subtotal">
                <th>Subtotal(B)</th>
                <td class="d-none"></td>
                <td class="d-none"></td>
                <td class="d-none"></td>
                <td><input type="number" name="subtotal_2" id="subtotal_2" readonly></td>
            </tr>
        </table>

        <br>
        <h4 class="text-white">Veículos</h4>
        <table class="table table-dark table-striped-columns text-center" id="Tabela_03">
            <thead>
                <tr>
                    <th><button type="button" class="btn btn-success" style="text-align: center;" onclick="adicionarLinha_3()">+</button></th>
                    <th>Descrição</th>
                    <th>Quantidade</th>
                    <th>Valor Unitário</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-data">
                    <td><button type="button" class="btn btn-danger" onclick="deletarLinha_3(this)">Deletar</button></td>
                    <td><input type="text" name="descricao_3[]" id="descricao_3"></td>
                    <td><input type="number" name="quantidade_3[]" id="quantidade_3" oninput="calcularTotal_3(1)"></td>
                    <td><input type="number" name="valor_unitario_3[]" id="valor_unitario_3" oninput="calcularTotal_3(1)"></td>
                    <td><input type="number" name="total_3[]" id="total_3" readonly></td>
                </tr>
            </tbody>
            <tr class="table-subtotal">
                <th>Subtotal(C)</th>
                <td class="d-none"></td>
                <td class="d-none"></td>
                <td class="d-none"></td>
                <td><input type="number" name="subtotal_3" id="subtotal_3" readonly></td>
            </tr>
        </table>

        <table class="table table-dark table-striped-columns text-center">
            <thead>
                <tr>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-data">
                    <td>Resultado</td>
                </tr>
            </tbody>
        </table>
</div>
<div class="d-flex justify-content-center">
    <button type="submit" class="btn btn-primary">Enviar</button>
</div>
</form>
<script src="{{asset('js/fixo.js')}}"></script>
@endsection