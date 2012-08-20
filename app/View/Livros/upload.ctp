<div class="container">
  <?php echo $this->Form->create('Livro', array('type' => 'file')); ?>
      <?php echo $this->Form->input('Livro.capa', array('div' => false, 'type' => 'file')); ?>
  <?php echo $this->Form->end('Enviar'); ?>
</div>