<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produtos</title>
</head>
<body>

    <h1>Produtos</h1>

    <form method="get" action="/salvar-produto">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{ $produto->nome }}">
        <br><br>

        <label for="valor">Valor:</label>
        <input type="text" id="valor" name="valor" value="{{ $produto->valor }}">
        <br><br>

        <label for="quantidade">Quantidade:</label>
        <input type="text" id="quantidade" name="estoque" value="{{ $produto->estoque }}">
        <br><br>

        <button type="submit">Salvar</button>
    </form>

</body>
</html>
