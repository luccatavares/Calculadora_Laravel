<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Multiplicação</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  @vite(['resources/js/app.js'])
</head>
<body>
  <header>
    <nav class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container d-flex justify-content-between align-items-center">
        <a href="#" class="navbar-brand d-flex align-items-center">
            <img src="{{ asset('imagens/logo.png') }}" width="50" height="50" alt="Logo">
            <strong class="ms-3">{{ $operacao ?? 'Calculadora' }}</strong>
        </a>
      </div>
    </nav>
  </header>

  <main class="container py-4">
        <h2 class="mb-3">Digite os números para multiplicar</h2>
    <form method="POST" action="/calcular-multiplicacao">
      @csrf
      <input type="hidden" name="quantidade" value="{{ $quantidade }}">
      
      @for ($i = 1; $i <= $quantidade; $i++)
        <div class="form-group mb-3">
          <label for="numero{{$i}}" class="form-label">Digite o número {{$i}}</label>
          <input type="number" class="form-control" id="numero{{$i}}" name="n{{$i}}" required>
        </div>
      @endfor
      
      <button type="submit" class="btn btn-primary btn-sm me-2">Calcular</button>
      <a href="/" class="btn btn-danger btn-sm">Sair</a>
    </form>
  </main>
</body>
</html>
