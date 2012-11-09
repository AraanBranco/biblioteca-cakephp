<?php
class GenerosController extends AppController {
  public $name = 'Generos';
  public $useTable = 'generos';

  public function index () {
    $generos = $this->Genero->find("all");

    $this->set(compact('generos'));
  }

  public function add () {
    if ( $this->request->isPost() ) {

      if( $this->Genero->save($this->data) ) {
        $this->Session->setflash(__('Genero cadastrado com sucesso!'), 'Message/Success');
        $this->redirect(array('action' => 'index'));
      } else {
        $this->set('data', $this->request->data);
        $this->set('errors', $this->Genero->validationErrors);
      }

    }
  }

  public function editar ( $id = null ) {
   $this->Genero->id = $id;
    if (!$this->Genero->exists()) {
      throw new NotFoundException(__('Genero inválid'), 'Message/Error');
    }
    if ($this->request->is('post') || $this->request->is('put')) {
      if ($this->Genero->save($this->request->data)) {
        $this->Session->setFlash(__('Genero salvo'), 'Message/Success');
        $this->redirect(array('action' => 'index'));
      } else {
        $this->set('data', $this->request->data);
        $this->set('errors', $this->Genero->validationErrors);
      }
    } else {
      $this->set('data', $this->Genero->read(null, $id));
    }
  }

  public function deletar ($id = null) {
    if ( $id && $this->request->isGet() ) {
      if ( $this->Genero->delete($id) ) {
        $this->Session->setFlash(__('Genero deletado com sucesso'), 'Message/Success');
      }
      $this->redirect( array('action' => 'index') );
    }
  }
}
?>