<?php

use \Alura\Cursos\Controller\FormularioInsercao;
use \Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\Persistencia;

return [
  '/novo-curso' => FormularioInsercao::class,
  '/listar-cursos' => ListarCursos::class,
  '/salvar-curso' => Persistencia::class,
];

?>