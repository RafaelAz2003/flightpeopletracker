<?php
include_once('conexao.php')
$nome = $_POST['nome'];
$email1 = $_POST['email1'];
$email2 = $_POST['email2'];
$numero = $_POST['numero'];
$senha1 = $_POST['pwd1'];
$senha2 = $_POST['pwd2'];

$result_base_dados - "INSERT INTO base_de_dados(nome, email1, email2, numero, senha1, senha2, created) VALUES ('$nome','$email1',''$email2',$numero','$senha1','$senha2', NOW())";
$resultado_base_dados = mysqli_query($conn,$result_base_dados);

if ($email1 == $email2){
    echo "Seja bem-vindo, novo viajante!!!";
}
else{
    echo "Os emails são diferentes, tente novamente";
}
if ($senha1 == $senha2){
    echo "Seja bem-vindo, novo viajante!!!";
}
else{
    echo "As senhas são diferentes, tente novamente";
}
?>