<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="/js/script.js" defer></script>
    <title>Clientes</title>
</head>
<body>
    <section id="formulario">
    <form id="form" action="index.php" method="post">
        <h2>Castastro de Clientes</h2>
        <label>Informe os dados do Cliente</label>
        <input placeholder="Nome do Cliente" type="text" name="nome_completo" id="nome_competo" class="input">
        <input type="date" name="data_nascimento" id="data_nascimento" class="input">
        <input placeholder="Logradouro" type="text" name="logradouro" id="logradouro" class="input">
        <input placeholder="Nº" type="number" name="numero" id="numero" class="input">
        <input placeholder="Bairro" type="text" name="bairro" id="bairro" class="input">
        <button id="enviar" onclick="validar()">Salvar</button>
    </form>
    
    </section>
</body>
</html>