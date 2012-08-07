<h1>Livros</h1>

<table>
  <tr>
    <th>#</th>
    <th>Nome</th>
    <th>Ações</th>
  </tr>

  <?php
    foreach ($livros as $livro) {
      echo '<tr>';
      echo '<td>'.$livro['Livro']['id'].'</td>';
      echo '<td>'.$livro['Livro']['livro'].'</td>';
      echo '</tr>';
    }
  ?>
</table>