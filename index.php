<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="/js/validar.js" defer></script>
    <title>Clientes</title>
</head>
<body>
    <section id="formulario">
    <form id="form" action="index.php" method="post">
        <h2>Castastro de Usuários</h2>
        <label>Informe os dados do Jogador</label>
        <input placeholder="NomeDeUsuário" type="text" name="nome_usuario" id="nome_usuario" class="input" autocomplete="off">
        <input placeholder="Nome Completo" type="text" name="nome_completo" id="logradouro" class="input" autocomplete="off">
        <input type="date" name="ingresso" id="ingresso" class="input" autocomplete="off">
        <button id="enviar" onclick="validar();">Salvar</button>
    </form>
    
    </section>
</body>
</html>