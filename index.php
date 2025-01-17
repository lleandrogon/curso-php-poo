<?php 

require_once "vendor/autoload.php";

$produto = new \App\Model\Produto();
$produto->setId(2);
$produto->setNome("Janela");
$produto->setDescricao("Vidro");

$produtoDao = new \App\Model\ProdutoDao();
$produtoDao->delete($produto);
$produtoDao->read();

foreach($produtoDao->read() as $produto) {
    echo $produto["nome"] . "<br>" . $produto["descricao"] . "<hr>";
}