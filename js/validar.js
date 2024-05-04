const btn = document.getElementById("enviar");

var validar = () => {
    let nomeUsuario = document.getElementById("nome_usuario");
    let nomeCompleto = document.getElementById("nome_completo");
    let ingresso = document.getElementById("ingresso");
    
}

var regex = /^[a-zA-Z0-9]+$/ // Permitir apenas letras e números
if(nomeUsuario.value == "") {
    alert("Informe o nome de usuario");
} else if(!regex.test(input.value)) {
    alert("Nome de usuário deve conter apenas letras e números, sem espaços");
} else if (ingresso.value) {
    alert("Informe a data de nascimento");
} else if (ingresso.value) {
    alert("Informe a data de ingresso do jogador");
} else {
    document.getElementById("form").submit();
}

