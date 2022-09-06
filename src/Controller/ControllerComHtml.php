<?php 

namespace Alura\Cursos\Controller;

abstract class ControllerComHtml //is abstract because it will never be instantiated
{
  public function renderizaHtml(string $caminhoTemplate, array $dados) :string
  {
    extract($dados);    //extract receives an associative array and their indexes will gonna be extract to a variable
    ob_start();         //starts to store everything that will gonna be showed
    require __DIR__.'/../../view/'.$caminhoTemplate;
    $html = ob_get_clean();

    return $html;
  }
}

?>