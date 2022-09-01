<?php

require __DIR__ .'/../vendor/autoload.php'; //finds the classes without giving requires

use \Alura\Cursos\Controller\ListarCursos;
use \Alura\Cursos\Controller\FormularioInsercao;

//var_dump($_SERVER);

switch ($_SERVER['PATH_INFO']){
    case '/listar-cursos':              //two points allows to execute everything that follows below
        $controlador = new ListarCursos();
        $controlador->processaRequisicao();
        break;
    case '/novo-curso';
        $controlador = new FormularioInsercao();
        $controlador->processaRequisicao();
        break;
    default:
        echo "Erro 404";
}

?>