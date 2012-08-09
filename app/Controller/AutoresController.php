<?php
class AutoresController extends AppController {
  public $name = 'Autores';
  public $useTable = 'autores';
  public $uses  = array("Autor");

  public function index () {
    $autores = $this->Autor->find("all");

    $this->set(compact('autores'));

  }

  public function add () {
    if ( $this->request->isPost() ) {

      if( $this->Autor->save($this->data) ) {
        $this->Session->setflash('Autor cadastrado com sucesso!');
        $this->request->data = array();
      }

    }
  }

  public function editar ( $id = null ) {
    if ( $id && $this->request->isGet() ) {
      $this->request->data = $this->Autor->read(null, $id);
    } else {
      if( $this->Autor->save($this->data) ) {
        $this->Session->setFlash('Autor salvo');
        $this->redirect( array('action' => 'index') );
      }
    }
  }

  public function deletar ($id = null) {
    if ( $id && $this->request->isGet() ) {
      if ( $this->Autor->delete($id) ) {
        $this->Session->setFlash('Autor deletado com sucesso');
      }
      $this->redirect( array('action' => 'index') );
    }
  }
}
?>