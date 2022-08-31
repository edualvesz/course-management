<?php

switch ($_SERVER['PATH_INFO']){
    case '/listar-cursos':              //two points allows to execute everything that follows below
        require 'listar-cursos;php';
        break;
    case '/novo-curso';
        require 'form-novo-curso.php';
        break;
    default:
        echo "Erro 404";
}

// if($_SERVER['PATH_INFO'] === '/listar-cursos'){
//     require 'listar-cursos;php';
// } else if ($_SERVER['PATH_INFO'] === '/novo-curso.php') {
//     require 'form-novo-curso.php';
// } else {
//     echo 'Erro 404';
// }

?>