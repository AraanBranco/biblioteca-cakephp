<h1>Editar Categoria</h1>

<?php
  echo $this->Form->create('Categoria', array('action' => 'editar')),
       $this->Form->input('id'),
       $this->Form->input('categoria'),
       $this->Form->end('Cadastrar');
?>