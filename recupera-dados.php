<?php

if($_POST){
    $nome = $_POST['nome'] ?? NULL;
    $email = $_POST['email'] ?? NULL;
    $idade = $_POST['idade'] ?? NULL;
    $hobbie = $_POST['hobbie'] ?? NULL;

    if($idade <= 18){
        echo "Você não tem mais do que 18 anos";
        exit;
    } if (strlen($nome) < 6) {
        echo "Nome muito curto, precisa de pelo menos 6 caracteres";
        exit;
    } else {
        echo "Nome: " . $nome;
        echo "<br>";
        echo "Email: " . $email;
        echo "<br>";
        echo "Idade: " . $idade;
        echo "<br>";
        echo "Hobbie: " . $hobbie;
    }
    
}
?>
<script src="js/sweetalert2.min.js"></script>
<script src="funcoes.php"></script>