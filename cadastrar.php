<?php 
    if(isset($_POST["nome_completo"], $_POST["data_nascimento"], $_POST["nome_completo"], $_POST["logradouro"], $_POST["numero"], $_POST["bairro"],)) {

        // Variáveis de conexão com o banco
        $banco = "clientes";
        $host = "localhost";
        $user = "root";
        $senha = "";

        $conexao = mysqli_connect($host, $user, $senha, $banco);

        $nome = $_POST["nome_completo"];
        $data = $_POST["data_nascimento"];
        $logradouro = $_POST["logradouro"];
        $numero = $_POST["numero"];
        $bairro = $_POST["bairro"];

        $sql = "INSERT INTO clientes VALUES(null, '$nome', '$data', '$logradouro', '$numero', '$bairro')";

    } else {
        echo "parâmetros não informados";
        echo "<br>";
        echo "<a href='index.php>Página inicial</a>";
    }
?>