<?php 
    if(isset($_POST["nome_completo"], $_POST["data_nascimento"], $_POST["nome_completo"], $_POST["logradouro"], $_POST["numero"], $_POST["bairro"],)) {

        // Variáveis de conexão com o banco
        $banco = "clientes";
        $host = "localhost";
        $user = "root";
        $senha = 123456;

        $conexao = mysqli_connect($host, $user, $senha, $banco);

        $nomeUsuario = $_POST["nome_usuario"];
        $nomeCompleto = $_POST["nome_completo"];
        $ingresso = $_POST["ingresso"];
        

        $sql = "INSERT INTO clientes VALUES('$nomeUsuario', '$nomeCompleto', '$ingresso')";

    } else {
        echo "parâmetros não informados";
        echo "<br>";
        echo "<a href='index.php>Página inicial</a>";
    }
?>