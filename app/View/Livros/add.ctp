<div class="container">
  <h1>Cadastrar Novo Livro</h1>

  <?php
    echo $this->Form->create('Livro',array('action' => 'add')),
         $this->Form->input('livro'); ?>
  <div class="form-actions">
      <?php echo
           $this->Form->submit('Salvar', array('div' => false, 'class' => 'btn btn-primary', 'title' => 'salvar')),
           $this->Form->button('Limpar', array('type' => 'reset', 'class' => 'btn')),
           $this->Form->end()
    ?>
  </div>
</div>