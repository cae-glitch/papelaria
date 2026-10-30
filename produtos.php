<?php
$conexao = new mysqli("localhost", "root", "", "papelaria");
$metodo = $_SERVER["REQUEST_METHOD"];

$r = $conexao->query("SELECT * FROM produtos");
while ($linha = $r->fetch_assoc()) {
    echo $linha["id"] . " - " . $linha["nome"] . " - " . $linha["preco"] . "\n";
}

if ($metodo === "GET") {
    
}