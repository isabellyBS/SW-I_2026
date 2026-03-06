function processarValidação() {
    const ValorInput = document.getElementById('InputCpf').value;
    const ehvalido = validarCPF(ValorInput);

    if (ehvalido) {
        alert("O CPF" + ValorInput + "é Valido!")
    } else {
        alert("O CPF" + ValorInput + "é INvalido!")
    }
}

//------Logica do validador------
function validarCPF(cpf) {
    // tira - e . deixando só os números
    cpf = cpf.replace(/[^\d]+/g, '');

    //verifica se tem 11 digitos ou é uma sequência repetida conhecida
    if (cpf.length !== 11 || !!cpf.match(/(\d)\1{10}/)) {
        return false;
    }

    const digitos = cpf.split('').map(el => +el);

    // Cálculo do 1º Dígito Verificador
    let soma = 0;
    for (let i = 0; i<9; i++) {
        soma += digitos[i]*(10-1);
    }

}

//estudar um pouco a linguagem "REGEX", q é implementada no js