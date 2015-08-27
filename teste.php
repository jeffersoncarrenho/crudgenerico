<?php
//Arquivo para testes
require_once("classes/teste.class.php");
require_once("classes/clientes.class.php");
$cliente = new Clientes();
$cliente->setValor("nome", "Jefferson");
$cliente->setValor("sobrenome", "Lima");
$cliente->inserir($cliente);
echo "<br />";
//echo $cliente->linhasafetadas. ' Registro(s) incluido(s) com sucesso';

?>


<pre>
    <?php print_r($cliente);?>
</pre>