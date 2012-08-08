<div class="container">
  <h1>Generos</h1>
  <p class="pull-right"><?php echo $this->Html->link('Adicionar novo genero', 'add', array('class' => 'btn btn-primary'))?></p>
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>#</th>
        <th>Genero</th>
        <th>Classificação</th>
      </tr>
    </thead>

    <tbody>
      <?php
      foreach ($generos as $gen) { ?>
      <tr>
        <td><?php echo $gen['Genero']['id']; ?></td>
        <td><?php echo $gen['Genero']['genero']; ?></td>
        <td><?php echo $gen['Genero']['classificacao']; ?></td>
        <td>
          <?php echo $this->Html->link('Editar', array('action' => 'editar', $gen['Genero']['id']), array('class' => 'btn btn-info')); ?>
          <?php echo $this->Html->link('Deletar', array('action' => 'deletar', $gen['Genero']['id']), array('class' => 'btn btn-danger'), 'Deseja deletar essa categoria?'); ?>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>