const btn = document.getElementById("enviar");
btn.addEventListener('click', () => {
    alert("ola")
})

var validar = () => {
    let nome = document.getElementById("nome_completo");
    let data = document.getElementById("data_nascimento");
    let logradouro = document.getElementById("logradouro");
    let numero = document.getElementById("numero");
    let bairro = document.getElementById("bairro");
}

if(nome.value == "") {
    alert("Informe o nome do cliente");
} else if (data.value) {
    alert("Informe a data de nascimento");
} else if (logradouro.value) {
    alert("Informe o logradouro do cliente");
} else if (numero.value) {
    alert("Informe o número do logradouro");
} else if (bairro.value) {
    alert("Informe o bairro do cliente");
} else {
    document.getElementById("form").submit()
}

