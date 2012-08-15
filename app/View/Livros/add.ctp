<?php
  echo $this->Html->script('redactor', array('inline' => false));
  echo $this->Html->css('redactor', null, array('inline' => false));
?>
<div class="container">
  <h1>Cadastrar Novo Livro</h1>

  <?php
    echo $this->Form->create('Livro',array('action' => 'add')),
         $this->Form->input('nome', array('div' => false)); ?>
         <label for="generos_id">Genero</label>
         <?php echo $this->Form->select('generos_id', $genero, array('empty' => false)); ?>
         <label for="autores_id">Autor</label>
         <?php echo $this->Form->select('autores_id', $autor, array('empty' => false)); ?>
         <script type="text/javascript">
          $(function() {
            $('#LivroDescricao').redactor();
          })
         </script>
         <label for="descricao">Descricao</label>
         <?php echo $this->Form->textarea('descricao', array('class' => 'span12', 'rows' => '20'));?>

  <div class="form-actions">
      <?php echo
           $this->Form->submit('Salvar', array('div' => false, 'class' => 'btn btn-primary', 'title' => 'salvar')); ?>
      <?php echo $this->Form->button('Limpar', array('type' => 'reset', 'class' => 'btn')); ?>
  </div>
  <?php echo $this->Form->end();?>
</div>
<!-- /container -->