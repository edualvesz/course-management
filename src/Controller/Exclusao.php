<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

Class Exclusao implements InterfaceControladorRequisicao
{

  public function __construct()
  {
    $this->entityManager = (new EntityManagerCreator())->getEntityManager();
  }

  public function processaRequisicao(): void
  {
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    // var_dump($id);
    // exit();

    if(is_null($id) || $id === false){
      header('Location: /listar-cursos');
      return;
    }

    $curso = $this->entityManager->getReference(Curso::class, $id);
    $this->entityManager->remove($curso);
    $this->entityManager->flush();                //sends to database?
    header('Location: /listar-cursos');
  }
}

?>
