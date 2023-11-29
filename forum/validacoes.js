function valida(senha, ){
    var senha = document.getElementById('senha').value;

    var confirm_senha = document.getElementById('confirm_senha').value;

    if(senha === confirm_senha){
        return true;}
    
    else{
        alert("As Senhas Não São Iguais");
        return false;}
}