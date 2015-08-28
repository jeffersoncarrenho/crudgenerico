<?php
//Arquivo para testes
require_once("classes/clientes.class.php");
$cliente = new Clientes();
//$cliente->setValor("nome", "Rodrigo");
//$cliente->setValor("sobrenome", "Freitas");
$cliente->valor_pk=3;
//$cliente->inserir($cliente);
//$cliente->atualizar($cliente);
//$cliente->deletar($cliente);
//$cliente->extras_select = "order by id desc";
//$cliente->selecionaTudo($cliente);

$cliente->selecionaCampos($cliente);
while($res = $cliente->retornaDados()):
	echo $res->id .' / '. $res->nome .' / '. $res->sobrenome .'<br />';
endwhile;
?>

<hr>
<pre>
    <?php print_r($cliente);?>
</pre>