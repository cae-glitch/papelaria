<?php
$conexao = new mysqli("localhost", "root", "", "papelaria");
$metodo = $_SERVER["REQUEST_METHOD"];


if ($metodo === "GET") {
    
}

if ($metodo === "POST") {
$conexao->query("INSERT INTO produtos (nome, preco) VALUES ('Caneta', 2.50)");
}


if ($metodo === "PUT") {
$conexao->query("UPDATE produtos SET nome = 'Mochila', preco = 89.90 WHERE id = 1");
}


if ($metodo === "PATCH") {
$conexao->query("UPDATE produtos SET preco = 3.00 WHERE id = 6");
}

if ($metodo === "DELETE") {
$conexao->query("DELETE FROM produtos WHERE id = 3");
}

if ($metodo === "OPTIONS") {
echo "Aceito: GET, POST, PUT, PATCH, DELETE, OPTIONS\n";
}

$r = $conexao->query("SELECT * FROM produtos");
while ($linha = $r->fetch_assoc()) {
    echo $linha["id"] . " - " . $linha["nome"] . " - " . $linha["preco"] . "\n";
}
