<div class="container">
  <h1>Editando Genero</h1>

  <?php
  echo $this->Form->create('Genero', array('action' => 'editar')),
       $this->Form->input('id'),
       $this->Form->input('genero'),
       $this->Form->input('classificacao', array('class' => 'input-mini'));
  ?>
<div class="form-actions">
  <?php echo
       $this->Form->submit('Salvar', array('div' => false, 'class' => 'btn btn-primary', 'title' => 'salvar')),
       $this->Form->button('Limpar', array('type' => 'reset', 'class' => 'btn')),
       $this->Form->end();
  ?>
</div>