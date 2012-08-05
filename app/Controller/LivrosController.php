<?php
class LivrosController extends AppController {
    
  public $name = 'Livros';

  public function index () {
    $Livros = $this->Livros->find("all");

    $this->set(compact('livros'));
  } 
}
?>