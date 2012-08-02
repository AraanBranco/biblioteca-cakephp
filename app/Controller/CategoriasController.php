<?php
class CategoriasController extends AppController {

  public $name = 'Categorias';

  public function index () {
    $categorias = $this->Categoria->find("all");

    $this->set(compact('categorias'));
  }

  public function cadastrar () {
    if ( $this->request->isPost() ) {

      if ( $this->Categoria->save($this->data) ) {
        $this->Session->setFlash('Categoria salva com sucesso!');
        $this->request->data = array();
      }

    }
  }

  public function view ($id = null) {
    if ( $id && $this->request->isGet() ) {
      $categoria = $this->Categoria->read(null, $id);

      $this->set(compact('categoria'));
    }
  }


  public function editar ( $id = null) {
    if ( $id && $this->request->isGet() ) {
      $this->request->data = $this->Categoria->read(null, $id);
    } else {
      if( $this->Categoria->save($this->data) ) {
        $this->Session->setFlash('Categoria salvada');
        $this->redirect( array('action' => 'index') );
      }
    }

  }

  public function deletar ($id = null) {
    if ( $id && $this->request->isGet() ) {
      if ( $this->Categoria->delete($id) ) {
        $this->Session->setFlash('Categoria deletada com sucesso');
      }
      $this->redirect( array($this->referrer() ) );
    }

  }

}
?>