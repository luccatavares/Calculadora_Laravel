<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Calculadora Lucca</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />


  @vite(['resources/js/app.js'])
</head>
<body>
  <header>
    <nav class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container d-flex justify-content-between align-items-center">
        <a href="#" class="navbar-brand d-flex align-items-center">
            <img src="{{ asset('imagens/logo.png') }}" width="50" height="50" alt="Logo">
            <strong class="px-3">Calculadora Lucca</strong>
        </a>
      </div>
    </nav>
  </header>

  <section class="container py-4">
    <div class="row g-4">

      <div class="col-md-3">
        <div class="card shadow-sm" style="width: 18rem;">
            <img src="{{ asset('imagens/mais.png') }}" alt="Soma" class="card-img-top rounded img-fluid" />
            <div class="card-body text-center">
            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalSoma">Somar</button>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card shadow-sm" style="width: 18rem;">
            <img src="{{ asset('imagens/menos.png') }}" alt="Subtração" class="card-img-top rounded img-fluid" />
            <div class="card-body text-center">
            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalSubtrair">Subtrair</button>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card shadow-sm" style="width: 18rem;">
            <img src="{{ asset('imagens/multiplicacao.png') }}" alt="Multiplicação" class="card-img-top rounded img-fluid" />
            <div class="card-body text-center">
            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalMultiplicar">Multiplicar</button>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card shadow-sm" style="width: 18rem;">
            <img src="{{ asset('imagens/divisao.png') }}" alt="Divisão" class="card-img-top rounded img-fluid" />
            <div class="card-body text-center">
            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalDividir">Dividir</button>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Modals -->

  <div class="modal fade" id="modalSoma" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="/somar" method="POST">
          @csrf
          <div class="modal-header">
            <h5 class="modal-title">Quantos números deseja somar?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
          </div>
          <div class="modal-body">
            <input type="number" name="quantidade" min="2" class="form-control" placeholder="Informe a quantidade" required />
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-outline-primary btn-sm">Enviar</button>
            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Fechar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalSubtrair" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="/subtrair" method="POST">
          @csrf
          <div class="modal-header">
            <h5 class="modal-title">Quantos números deseja subtrair?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
          </div>
          <div class="modal-body">
            <input type="number" name="quantidade" min="2" class="form-control" placeholder="Informe a quantidade" required />
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-outline-primary btn-sm">Enviar</button>
            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Fechar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalMultiplicar" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="/multiplicar" method="POST">
          @csrf
          <div class="modal-header">
            <h5 class="modal-title">Quantos números deseja multiplicar?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
          </div>
          <div class="modal-body">
            <input type="number" name="quantidade" min="2" class="form-control" placeholder="Informe a quantidade" required />
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-outline-primary btn-sm">Enviar</button>
            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Fechar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalDividir" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="/dividir" method="POST">
          @csrf
          <div class="modal-header">
            <h5 class="modal-title">Quantos números deseja dividir?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
          </div>
          <div class="modal-body">
            <input type="number" name="quantidade" min="2" class="form-control" placeholder="Informe a quantidade" required />
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-outline-primary btn-sm">Enviar</button>
            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Fechar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
