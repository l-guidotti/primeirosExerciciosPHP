function validarNumero(){
    const number = document.getElementById("number");
    const valor = number.value;

    if(isNaN(valor) || valor.trim() === ''){
        alert('Digite um número!');
        number.value = '';
        return false;
    }

    return true; 
}