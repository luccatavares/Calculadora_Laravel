<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Operação de Divisão</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    @vite(['resources/js/app.js'])
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <img src="{{ asset('imagens/logo.png') }}" width="50" height="50" alt="Logo">
                    <strong class="ms-3">{{ $operacao ?? 'Calculadora' }}</strong>
                </a>
            </div>
        </nav>
    </header>

    <main class="container mt-4">
        <h2 class="mb-3">Digite os números para dividir</h2>
        <form method="POST" action="/calcular-divisao">
            @csrf
            <input type="hidden" name="quantidade" value="{{ $quantidade }}" />
            
            @for ($indice = 1; $indice <= $quantidade; $indice++)
                <div class="mb-3">
                    <label for="n{{ $indice }}" class="form-label">Valor {{ $indice }}:</label>
                    <input type="number" class="form-control" name="n{{ $indice }}" id="n{{ $indice }}" required />
                </div>
            @endfor

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary btn-sm">Calcular</button>
                <a href="/" class="btn btn-danger btn-sm">Sair</a>
            </div>
        </form>
    </main>
</body>
</html>
