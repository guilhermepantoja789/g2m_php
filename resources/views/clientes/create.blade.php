<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Cliente</title>
    <style> /* Mesmo estilo da home para consistência */ </style>
</head>
<body>
<div class="card">
    <h1>Adicionar Novo Cliente</h1>

    <form action="{{ route('clientes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf <div>
            <label for="nome">Nome do Cliente:</label><br>
            <input type="text" id="nome" name="nome" required>
        </div>
        <br>
        <div>
            <label for="logo">Logo (PNG):</label><br>
            <input type="file" id="logo" name="logo" accept="image/png">
        </div>
        <br>
        <button type="submit">Salvar Cliente</button>
    </form>
</div>
</body>
</html>
