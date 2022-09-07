<?php

use Alura\Cursos\Controller\Exclusao;
use Alura\Cursos\Controller\FormularioEdicao;
use \Alura\Cursos\Controller\FormularioInsercao;
use Alura\Cursos\Controller\FormularioLogin;
use \Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\Persistencia;

return [
  '/novo-curso' => FormularioInsercao::class,
  '/listar-cursos' => ListarCursos::class,
  '/salvar-curso' => Persistencia::class,
  '/excluir-curso' => Exclusao::class,
  '/alterar-curso' => FormularioEdicao::class,
  '/login' => FormularioLogin::class,
];

?>