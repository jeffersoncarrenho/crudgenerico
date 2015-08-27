<?php
//Arquivo para testes
require_once("classes/teste.class.php");
require_once("classes/clientes.class.php");
//$testando = new Teste();
//$cliente = new Clientes();
//$cliente->setValor('nome', 'Jeff');
//$cliente->setValor('sobrenome', 'Lima');
//$cliente->setValor('bairro', 'Centro');

//$cliente->delCampo('sobrenome');
//$cliente->addCampo('bairro', 'bairro tal');
/*echo "<pre>";
    print_r($cliente);
echo "</pre>";*/

echo ($cliente->getValor('nome'));

?>