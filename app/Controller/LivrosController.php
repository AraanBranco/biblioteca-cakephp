<?php
class LivrosController extends AppController {
    
  public $name = 'Livros';
  public $uses  = array('Autores', 'Generos');

  public function index () {
    $livros = $this->Livro->find("all");

    $this->set(compact('livros'));
  }

  public function add() {
    

  }

  public function listaAutores() {
    
  }
}
?>