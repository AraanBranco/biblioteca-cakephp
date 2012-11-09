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
        $this->Session->setflash(__('Autor cadastrado com sucesso!'), 'Message/Success');
        $this->redirect(array('action' => 'index'));
      } else {
        $this->set('data', $this->request->data);
        $this->set('errors', $this->Autor->validationErrors);
      }

    }
  }

  public function editar ( $id = null ) {
   $this->Autor->id = $id;
    if (!$this->Autor->exists()) {
      throw new NotFoundException(__('Autor inválid'), 'Message/Error');
    }
    if ($this->request->is('post') || $this->request->is('put')) {
      if ($this->Autor->save($this->request->data)) {
        $this->Session->setFlash(__('Autor salvo'), 'Message/Success');
        $this->redirect(array('action' => 'index'));
      } else {
        $this->set('data', $this->request->data);
        $this->set('errors', $this->Autor->validationErrors);
      }
    } else {
      $this->set('data', $this->Autor->read(null, $id));
    }
  }

  public function deletar ($id = null) {
    if ( $id && $this->request->isGet() ) {
      if ( $this->Autor->delete($id) ) {
        $this->Session->setFlash(__('Autor deletado com sucesso'), 'Message/Success');
      }
      $this->redirect( array('action' => 'index') );
    }
  }
}
?>