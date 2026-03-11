function trocarNome() {
    var nome = document.getElementById("campoNome").value;
    document.getElementById("nomeExibido").innerText= "Nome: "+ nome;
}

function somar() {
    
    var numero1 = parseFloat(document.getElementById("num1").value);
    var numero2 = parseFloat(document.getElementById("num2").value);

    var soma = numero1 + numero2;

    document.getElementById("resultado").innerText="Resultado: "+ soma;
}

//Atividade, IMC

function IMC() {
    var peso = parseFloat(document.getElementById("peso").value);
    var altura = parseFloat(document.getElementById("altura").value);

    var imc = peso / (altura**2)

    document.getElementById("Rimc").innerText="Seu IMC: "+ imc;
}