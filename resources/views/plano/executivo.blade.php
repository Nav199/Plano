@extends('layout.app')
@section('content')   
<div class="container mt-5">
    <form method="POST" action="/executivo">
        <h3 class="text-center mb-4 white-label">Formulário Empresarial</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="nomeEmpresa" class="white-label">Nome da Empresa</label>
                    <input type="text" class="form-control custom-input" id="nomeEmpresa" name="nomeEmpresa" placeholder="Nome da Empresa"  style="color: rgba(123, 123, 123, 1);">
                </div>
                <div class="form-group mb-3">
                    <label for="cnpjCpf" class="white-label">CNPJ/CPF</label>
                    <input type="number" class="form-control custom-input" id="cnpjCpf" name="cnpjCpf" placeholder="CNPJ/CPF">
                </div>
                <div class="form-group mb-3">
                <label for="setorAtividade" class="white-label">Setor de Atividade</label>
                <select class="form-control custom-input" id="setorAtividade" name="setorAtividade">
                    <option value="agropecuaria">Agropecuária</option>
                    <option value="industria">Indústria</option>
                    <option value="comercio">Comércio</option>
                    <option value="servicos">Prestação de Serviços</option>
                    <option value="software">Software</option>
                    <option value="manutencao">Manutenção</option>
                </select>
            </div>
            <div class="form-group mb-3">
            <label for="FormaJuridica" class="white-label">Forma Jurídica</label>
            <select class="form-select" id="FormaJuridica" name="FormaJuridica" aria-label="Default select example">
                <option selected>Forma Jurídica</option>
                <option value="EI">Empresário Individual (EI)</option>
                <option value="MEI">Microempreendedor Individual (MEI)</option>
                <option value="EIRELI">Empresário Individual de Responsabilidade Limitada (EIRELI)</option>
                <option value="Ltda">Sociedade Limitada (Ltda)</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="enquadramento" class="white-label">Enquadramento Tributário</label>
            <select class="form-select" id="enquadramento" name="enquadramento" aria-label="Default select example">
                <option selected>Optante pelo Simples</option>
                <option value="Não">Não</option>
                <option value="Sim">Sim</option>
            </select>
        </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="cep" class="white-label">CEP</label>
                    <input type="text" class="form-control custom-input" id="cep" name="cep" placeholder="CEP">
                </div>
                <div class="form-group mb-3">
                    <label for="localidade" class="white-label">Localidade/UF</label>
                    <input type="text" class="form-control custom-input" id="localidade" name="localidade" placeholder="Localidade/UF">
                </div>
                <div class="form-group mb-3">
                    <label for="bairroDistrito" class="white-label">Bairro/Distrito</label>
                    <input type="text" class="form-control custom-input" id="bairroDistrito" name="bairroDistrito" placeholder="Bairro/Distrito">
                </div>
                <div class="form-group mb-3">
                    <label for="logradouro" class="white-label">Logradouro</label>
                    <input type="text" class="form-control custom-input" id="logradouro" name="logradouro" placeholder="Logradouro">
                </div>
                <div class="form-group mb-3">
                    <label for="numero" class="white-label">Número</label>
                    <input type="text" class="form-control custom-input" id="numero" name="numero" placeholder="Número">
                </div>
            </div>
        </div>
        <div class="form-group mb-3">
            <label for="missaoEmpresa" class="white-label">Missão da Empresa</label>
            <textarea class="form-control custom-input" id="missaoEmpresa" name="missaoEmpresa" placeholder="Missão da Empresa"></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="valoresEmpresa" class="white-label">Valores da Empresa</label>
            <textarea class="form-control custom-input" id="valoresEmpresa" name="valoresEmpresa" placeholder="Valores da Empresa"></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="visaoEmpresa" class="white-label">Visão da Empresa</label>
            <textarea class="form-control custom-input" id="visaoEmpresa" name="visaoEmpresa" placeholder="Visão da Empresa"></textarea>
        </div>
        <div class="form-group">
            <label for="fonteRecursos" class="white-label">Fonte dos Recursos da Empresa</label>
            <textarea class="form-control custom-input" id="fonteRecursos" name="fonteRecursos" placeholder="Fonte dos Recursos da Empresa"></textarea>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary mb-3">Enviar</button>
        </div>
    </form>
</div>
@endsection