<?php
class LivrosController extends AppController {
    
  public $name = 'Livros';
  public $uses  = array('Autor', 'Genero', 'Livro');
  public $useTable = array('autores', 'generos', 'livros');

  public function index () {
    $livros = $this->Livro->find("all");
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

  public function editar ($id = null) {
    if ( $id && $this->request->isGet() ) {
      $livros = $this->Livro->read(null, $id);
      $this->set(compact('livros'));

      $selectAutores = $this->Autor->find('list', array(
        'fields' => array('Autor.autor')
        ));
      $this->set(compact('selectAutores'));

      $selectGeneros = $this->Genero->find('list', array(
        'fields' => array('Genero.genero')
        ));
      $this->set(compact('selectGeneros'));

      $this->request->data = $this->Livro->read(null, $id);

    } else {
      if( $this->Livro->save($this->data) ) {

        $this->Session->setFlash('Livro salvo');
        $this->redirect( array('action' => 'index') );
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