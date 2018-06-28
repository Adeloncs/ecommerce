<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true); // view error

$app->get('/', function() { // rota principal
    
	$sql = new Hcode\DB\Sql();

	$results = $sql->select("SELECT * FROM tb_users");

	echo json_encode($results);

});

$app->run();

 ?>