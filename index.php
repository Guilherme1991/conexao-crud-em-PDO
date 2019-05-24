<?php
include('crud/Conexao.php');
$conecta = new ClassConexao();

$crud = new Crud();
$crud->prepareStatements("Conexão", array['1','2','3','4','5']);
//var_dump($conecta->conectaDB());


?>