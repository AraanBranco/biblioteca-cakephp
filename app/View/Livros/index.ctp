<h1>Livros</h1>

<table>
  <tr>
    <th>#</th>
    <th>Nome</th>
    <th>Ações</th>
  </tr>

  <?php
    foreach ($categorias as $cat) {
      echo '<tr>';
      echo '<td>'.$cat['Categoria']['id'].'</td>';
      echo '<td>'.$cat['Categoria']['categoria'].'</td>';
      echo '<td>'.$this->Html->link('Editar', array('action' => 'editar', $cat['Categoria']['id'] )).' '.$this->Html->link('Deletar', array('action' => 'deletar', $cat['Categoria']['id']), null, 'Deseja deletar essa categoria?').' '.$this->Html->link('View', array('action' => 'view', $cat['Categoria']['id'])).
      '</td>';
      echo '</tr>';
    }
  ?>
</table>