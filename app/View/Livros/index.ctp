<div class="container">
  <h1>Livros</h1>
  <p class="pull-right"><?php echo $this->Html->link('Adicionar novo livro', array('action' => 'add'), array('class' => 'btn btn-primary'))?></p>
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>#</th>
        <th>Nome</th>
        <th>Autor</th>
        <th>Genero</th>
        <th>Ações</th>
      </tr>
    </thead>

    <tbody>
      <?php
        foreach ($livros as $livro) { ?>
        <tr>
          <td><?php echo $livro['Livro']['id']?></td>
          <td><?php echo $livro['Livro']['nome']?></td>
          <td><?php echo $livro['Autor']['autor']?></td>
          <td><?php echo $livro['Genero']['genero']?></td>
          <td>
            <?php echo $this->Html->link('Editar', array('action' => 'editar', $livro['Livro']['id']), array('class' => 'btn btn-info'));
            ?>
            <?php
             echo $this->Html->link('Deletar', array('action' => 'deletar', $livro['Livro']['id']), array('class' => 'btn btn-danger'), 'Deseja deletar esse livro?');
            ?>
          </td>
        </tr> 
      <?php } ?>
    </tbody>
  </table>
</div>