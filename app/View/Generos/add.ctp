<div class="container">
  <h1>Cadastrar Genero</h1>

  <?php
    echo $this->Form->create('Genero',array('action' => 'add')),
         $this->Form->input('genero', array('error' => 'Campo obrigatorio!')),
         $this->Form->input('classificacao',
          array('class' => 'input-mini', 'error' => 'Campo obrigatorio!')
          );
         ?>
  <div class="form-actions">
      <?php echo
           $this->Form->submit('Salvar', array('div' => false, 'class' => 'btn btn-primary', 'title' => 'salvar')),
           $this->Form->button('Limpar', array('type' => 'reset', 'class' => 'btn')),
           $this->Form->end()
    ?>
  </div>
</div>