<h1>Cadastrar Nova Categoria</h1>

<?php
  echo $this->Form->create('Categoria',array('action' => 'cadastrar')),
       $this->Form->input('categoria'),
       $this->Form->end('Cadastrar');
?>