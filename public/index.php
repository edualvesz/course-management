<?php

require __DIR__ .'/../vendor/autoload.php'; //finds the classes without giving requires

use \Alura\Cursos\Controller\InterfaceControladorRequisicao;

$caminho = $_SERVER['PATH_INFO'];
$rotas = require __DIR__.'/../config/routes.php';

if(!array_key_exists($caminho, $rotas)){
    http_response_code(404);
    exit();
}

session_start(); //starts to store session data

$ehrotaDeLogin = stripos($caminho, 'login');                                //stripos looks for the position to the word (in this case) 'login' inside variable, if its not found the result gonna be false, 
if(!isset($_SESSION['logado']) && $ehrotaDeLogin === false){                //we allow an unlogged user to access all URLs that contains the word (login) using stripos
    header('Location: /login');
    exit;
}

// other way to do this logic is comented below

// if(!isset($_SESSION['logado']) && $caminho !=='/login' && $caminho !== '/realiza-login'){ //you have to make sure that you're not trying to access these two URLs, because in both of them you don't need to be logged to access
//     header('Location: /login');
//     exit;
// }

$classeControladora = $rotas[$caminho];
/** @var InterfaceControladorRequisicao $controlador */
$controlador = new $classeControladora();
$controlador->processaRequisicao();


?>