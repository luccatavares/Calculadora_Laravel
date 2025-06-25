<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Resultado</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />


  @vite(['resources/js/app.js'])
</head>
<body>
  <header>
    <nav class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container d-flex justify-content-between align-items-center">
        <a href="#" class="navbar-brand d-flex align-items-center">
            <img src="{{ asset('imagens/logo.png') }}" width="50" height="50" alt="Logo">
            <strong class="px-3">Resultado</strong>
        </a>
      </div>
    </nav>
  </header>

  <main class="container py-5 text-center">
    <h2 class="mb-4">Resultado Final:</h2>
    <div class="display-4 fw-bold mb-5">{{ $resultado }}</div>
    <a href="/" class="btn btn-success btn-sm">Voltar para o início</a>
</main>
</body>
</html>
