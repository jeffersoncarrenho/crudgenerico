<?php
//Arquivo para testes
require_once("classes/clientes.class.php");
$cliente = new Clientes();
$cliente->setValor("nome", "Rodrigo");
$cliente->setValor("sobrenome", "Freitas");
$cliente->valor_pk=2;
//$cliente->inserir($cliente);
//$cliente->atualizar($cliente);
$cliente->deletar($cliente);



?>


<pre>
    <?php print_r($cliente);?>
</pre>