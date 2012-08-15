<?php
class LivrosController extends AppController {
    
  public $name = 'Livros';
  public $uses  = array('Autor', 'Genero', 'Livro');
  public $useTable = array('autores', 'generos', 'livros');

  public function index () {
    $livros = $this->Livro->find("all");
    $genero = $this->Livro->find('first', array(
      'fields' => array('Livro.generos_id', 'Genero.id'),
      'conditions' => array('Livro.generos_id = Genero.id')
      ));

    $this->set(compact('genero'));
    $this->set(compact('livros'));
  }

  public function add() {
    $genero = $this->Genero->find('list', array(
      'fields' => array('Genero.genero')
      ));
    $this->set(compact('genero'));

    $autor = $this->Autor->find('list', array(
      'fields' => array('Autor.autor')
      ));
    $this->set(compact('autor'));

    if ( $this->request->isPost() ) {

      if( $this->Livro->save($this->data) ) {
        $this->Session->setflash('Livro cadastrado com sucesso!');
        $this->request->data = array();
      }

    }

  }

  public function deletar ($id = null) {
    if ( $id && $this->request->isGet() ) {
      if ( $this->Livro->delete($id) ) {
        $this->Session->setFlash('Livro deletado com sucesso');
      }
      $this->redirect( array('action' => 'index') );
    }
  }

}
?>