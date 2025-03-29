function validacao(){
    const name = document.getElementById('name').value;
    const nota1 = document.getElementById('nota1').value;
    const nota2 = document.getElementById('nota2').value;
    const nota3 = document.getElementById('nota3').value;

    if(name == "" || nota1 == "" || nota2 == "" || nota3 == ""){
        alert('Todos os campos devem ser preenchidos!');
        return false;
    }

    if((nota1 < 0 || nota1 > 10) || (nota2 < 0 || nota2 > 10) || (nota3 < 0 || nota3 > 10)){
        alert('Nota inválida! Digite um valor válido.');
        return false;
    }

    return true;
}