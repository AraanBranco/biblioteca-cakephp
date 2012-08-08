<?php
class AutoresController extends AppController {
  public $name = 'Autores';
  public $uses  = array("Autor");

  public function index () {
    $autores = $this->Autor->find("all");

    $this->set(compact('autores'));

  }

  public function add () {
    if ( $this->request->isPost() ) {

      if( $this->Genero->save($this->data) ) {
        $this->Session->setflash('Genero cadastrado com sucesso!');
        $this->request->data = array();
      }

    }
  }

  public function editar ( $id = null ) {
    if ( $id && $this->request->isGet() ) {
      $this->request->data = $this->Genero->read(null, $id);
    } else {
      if( $this->Genero->save($this->data) ) {
        $this->Session->setFlash('Genero salvo');
        $this->redirect( array('action' => 'index') );
      }
    }
  }

  public function deletar ($id = null) {
    if ( $id && $this->request->isGet() ) {
      if ( $this->Genero->delete($id) ) {
        $this->Session->setFlash('Genero deletado com sucesso');
      }
      $this->redirect( array('action' => 'index') );
    }
  }
}
?>