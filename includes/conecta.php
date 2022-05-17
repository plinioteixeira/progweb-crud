<?php 

// parâmetro do servidor de BD
$seervidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "vendas_plinio";

// conectando ao servidor 
$conexao = mysqli_connect($seervidor, $usuario, $senha, $banco);

// Habilitar o suporte ao charset utf8
mysqli_set_charset($conexao, "utf8");

/* teste (provisório) */
/* if ($conexao) {
    echo "tudo ok!";
} */