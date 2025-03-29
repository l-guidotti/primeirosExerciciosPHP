function validacao(){
    const nome = document.getElementById('nome').value;
    const email = document.getElementById('email').value;
    const cpf = document.getElementById('cpf').value;
    const cartao  = document.getElementsByName('cartao');

    const cartaoValido = false;
    for(i=0; i<cartao.length; i++){
        if(cartao[i].checked){
            cartaoValido = true;
            break;
        }
    }

    if(nome == '' || email == '' || cpf == '' || !cartaoValido){
        alert('Todos os campos são obrigatórios!');
        return false;
    }

    const cpfValido = /^\d{3}\.\d{3}\.\d{3}-\d{2}$/;
    if(!cpfValido.test(cpf)){
        alert('CPF inválido! Digite no formato 12345678900');
        return false;
    }

    return true;
}