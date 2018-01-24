<?php

require 'lib/Carbon.php';   // p buscar  o arquivo
require 'CartaoDeCredito.php';
require 'Cliente.php';

use Carbon\Carbon;  //namespace nome da classe  = use carbon\carbon

$cliente = new Cliente();
$cliente->nome = "Rafael Cosentino";
$cliente->codigo = "123";

echo "Dados do Cliente: " . PHP_EOL;
//echo "Nome: $cliente->nome " . PHP_EOL;
//echo "Codigo: $cliente->codigo " . PHP_EOL;

$cartao = new CartaoDeCredito();
$cartao->numero = "111111";
$cartao->dataDeValidade = Carbon::createFromDate(2018, 12, 12, 'America/Sao_Paulo'); // procurar carbon php biliotecas do php

//echo "Numero: $cartao->numero " . PHP_EOL;
//echo "Validade: {$cartao->dataDeValidade->format('d/m/Y')} " . PHP_EOL;

$cartao->cliente = $cliente;

echo"Nome do cliente do cartão: {$cartao->cliente->nome}" . PHP_EOL;
echo"Codigo do cliente: {$cartao->cliente->codigo}" . PHP_EOL;
echo"Numero do cartão: {$cartao->numero}" . PHP_EOL;
echo"Data de validade cartão: {$cartao->dataDeValidade}" . PHP_EOL;
