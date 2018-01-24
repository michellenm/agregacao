<?php

require  'lib/Carbon.php';   // p buscar  o arquivo
require 'CartaoDeCredito.php';
require 'Cliente.php';

use Carbon\Carbon;  //namespace nome da classe  = use carbon\carbon

$cliente = new Cliente();
$cliente->nome = "Rafael Cosentino";
$cliente->codigo = "123";

echo "Dados do Cliente: " . PHP_EOL;
echo "Nome: $cliente->nome " . PHP_EOL;
echo "Codigo: $cliente->codigo " . PHP_EOL;

$cartao = new CartaoDeCredito();
$cartao->numero = "111111";
$cartao->dataDeValidade = Carbon::createFromDate(2018, 12, 12, 'America/Sao_Paulo'); // procurar carbon php biliotecas do php

echo "Numero: $cartao->numero " . PHP_EOL;
echo "Validade: {$cartao->dataDeValidade->format('d/m/y')} " . PHP_EOL;

$cartao->cliente = $cliente;
