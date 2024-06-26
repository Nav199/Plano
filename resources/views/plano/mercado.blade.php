@extends('layout.app')
@section('content')   
<div class="container">
    <h2 class="text-center mb-4 white-label">Análise de Mercado</h2>
  <form action="" method="post">
    <div class="container mt-4">
      <div class="mb-3">
          <label for="publico" class="form-label white-label text-center">Público Alvo</label>
          <textarea class="form-control" id="publico" name="publico" placeholder="Público Alvo"></textarea>
      </div>
      <div class="mb-3">
          <label for="comportamento" class="form-label white-label">Comportamento</label>
          <textarea class="form-control" id="comportamento" name="comportamento" placeholder="Comportamento"></textarea>
      </div>
      <div class="mb-3">
          <label for="area" class="form-label white-label">Área de Abrangência</label>
          <textarea class="form-control" id="area" name="area" placeholder="Área de Abrangência"></textarea>
      </div>
  </div>
  
      <div class="container mt-4 ">
        <h3 class="white-label">Fornecedores</h3>

        <button class="btn btn-primary" type="button" onclick="adicionarFornecedor()"><i class="bi bi-x-lg">+</i></button>
        <div id="fornecedoresContainer">
        
        </div>

      </div>

      <div class="container mt-4">
        <h3 class="white-label">Concorrentes</h3>
        <button class="btn btn-primary" type="button" onclick="adicionarConcorrente()"><i class="bi bi-x-lg">+</i></button>
        <div id="concorrentesContainer">

        </div>
      </div>
      <br>
    </div>
    <button type="submit" class="btn btn-primary text-center">Enviar</button>
    <input type="hidden" name="contadorFornecedores" value="0" id="contadorFornecedores">
    <input type="hidden" name="contadorConcorrentes" value="0" id="contadorConcorrentes">
  </form>
  
  <!-- Incluindo o script do Bootstrap -->
  

  <script>
    let contadorFornecedores = 0;
    let contadorConcorrentes = 0;

    function adicionarFornecedor() {
      const fornecedoresContainer = document.getElementById('fornecedoresContainer');

      const divFornecedor = document.createElement('div');
      divFornecedor.className = 'mb-3';
      divFornecedor.innerHTML = `
        <label for="descricaoFornecedor${contadorFornecedores}" class="form-label">Descrição</label>
        <input type="text" class="form-control" id="descricaoFornecedor${contadorFornecedores}" name="descricaoFornecedor${contadorFornecedores}" placeholder="Descrição">
        <label for="nomeFornecedor${contadorFornecedores}" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nomeFornecedor${contadorFornecedores}" name="nomeFornecedor${contadorFornecedores}" placeholder="Nome">
        <label for="precoFornecedor${contadorFornecedores}" class="form-label">Preço</label>
        <input type="number" class="form-control" id="precoFornecedor${contadorFornecedores}" name="precoFornecedor${contadorFornecedores}" step="0.01" min="0" placeholder="Preço">
        <label for="pagamentoFornecedor${contadorFornecedores}" class="form-label">Pagamento</label>
        <input type="text" class="form-control" id="pagamentoFornecedor${contadorFornecedores}" name="pagamentoFornecedor${contadorFornecedores}" placeholder="Pagamento">
        <label for="prazoEntregaFornecedor${contadorFornecedores}" class="form-label">Prazo de Entrega</label>
        <input type="text" class="form-control" id="prazoEntregaFornecedor${contadorFornecedores}" name="prazoEntregaFornecedor${contadorFornecedores}" placeholder="Prazo de Entrega">
        <label for="localizacaoFornecedor${contadorFornecedores}" class="form-label">Localização</label>
        <input type="text" class="form-control" id="localizacaoFornecedor${contadorFornecedores}" name="localizacaoFornecedor${contadorFornecedores}" placeholder="Localização">
      `;

      fornecedoresContainer.appendChild(divFornecedor);
      contadorFornecedores++;
      document.getElementById('contadorFornecedores').value = contadorFornecedores;
    }

    function adicionarConcorrente() {
      const concorrentesContainer = document.getElementById('concorrentesContainer');

      const divConcorrente = document.createElement('div');
      divConcorrente.className = 'mb-3';
      divConcorrente.innerHTML = `
        <label for="qualidadeConcorrente${contadorConcorrentes}" class="form-label">Qualidade</label>
        <input type="text" class="form-control" id="qualidadeConcorrente${contadorConcorrentes}" name="qualidadeConcorrente${contadorConcorrentes}" placeholder="Qualidade">
        <label for="nomeConcorrente${contadorConcorrentes}" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nomeConcorrente${contadorConcorrentes}" name="nomeConcorrente${contadorConcorrentes}" placeholder="Nome">
        <label for="precoConcorrente${contadorConcorrentes}" class="form-label">Preço</label>
        <input type="number" class="form-control" id="precoConcorrente${contadorConcorrentes}" name="precoConcorrente${contadorConcorrentes}" step="0.01" min="0" placeholder="Preço">
        <label for="pagamentoConcorrente${contadorConcorrentes}" class="form-label">Pagamento</label>
        <input type="text" class="form-control" id="pagamentoConcorrente${contadorConcorrentes}" name="pagamentoConcorrente${contadorConcorrentes}" placeholder="Pagamento">
        <label for="servicoConcorrente${contadorConcorrentes}" class="form-label">Serviço ao Cliente</label>
        <input type="text" class="form-control" id="servicoConcorrente${contadorConcorrentes}" name="servicoConcorrente${contadorConcorrentes}" placeholder="Serviço ao Cliente">
        <label for="garantiasConcorrente${contadorConcorrentes}" class="form-label">Garantias Oferecidas</label>
        <input type="text" class="form-control" id="garantiasConcorrente${contadorConcorrentes}" name="garantiasConcorrente${contadorConcorrentes}" placeholder="Garantias Oferecidas">
        <label for="localizacaoConcorrente${contadorConcorrentes}" class="form-label">Localização</label>
        <input type="text" class="form-control" id="localizacaoConcorrente${contadorConcorrentes}" name="localizacaoConcorrente${contadorConcorrentes}" placeholder="Localização">
      `;

      concorrentesContainer.appendChild(divConcorrente);
      contadorConcorrentes++;
      document.getElementById('contadorConcorrentes').value = contadorConcorrentes;
    }
  </script>
@endsection