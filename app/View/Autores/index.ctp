<div class="container">
  <h1>Autores</h1>
  <p class="pull-right"><?php echo $this->Html->link('Adicionar novo autor', 'add', array('class' => 'btn btn-primary'))?></p>
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>#</th>
        <th>Nome</th>
      </tr>
    </thead>

    <tbody>
      <?php
        foreach ($autores as $autor) { ?>
        <tr>
          <td><?php echo $autor['Autor']['id']?></td>
          <td><?php echo $autor['Autor']['autor']?></td>
          <td>
            <?php
              echo $this->Html->link('Editar',
                array('action' => 'editar', $autor['Autor']['id']),
                array('class' => 'btn btn-info'));?>
            <?php
              echo $this->Html->link('Deletar',
                array('action' => 'deletar', $autor['Autor']['id']),
                array('class' => 'btn btn-danger'), 'Deseja realmente deletar esse autor?'
                );
            ?>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>