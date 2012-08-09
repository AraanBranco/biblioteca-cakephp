<div class="container">
  <h1>Editando Autor</h1>

  <?php
    echo $this->Form->create('Autor', array('action' => 'add')),
         $this->Form->input('autor', array('error' => 'Campo obrigatorio!'));
  ?>
  <div class="form-actions">
    <?php
     echo $this->Form->submit('Salvar', array('div' => false, 'class' => 'btn btn-primary', 'title' => 'Salvar')),
          $this->Form->button('Limpar', array('type' => 'reset', 'class' => 'btn')),
          $this->Form->end()
    ?>
  </div>
</div>