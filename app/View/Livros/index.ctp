<div class="container-fluid">
  <div class="container">
    <div class="hero-unit">
      <h1>Sistema de Biblioteca</h1>
    </div>
  </div>
</div>

<div class="container">
    <h3>Últimos Livros Lançados</h3>

    <?php
      foreach($livros as $livro) { ?>
      <div class="span2">
        <?php
          echo $this->Html->link(
            $this->Html->image('/uploads/livro/capa/thumb/'.$livro['Livro']['capa'], array(
              'alt' => $livro['Livro']['nome'])),
              array('controller' => 'livro', 'action' => 'view', $livro['Livro']['id']),
              array('escape' => false)
              );
        ?>
        <div class="caption">
          <center><p><?php echo $livro['Livro']['nome']; ?></p></center>
        </div>
      </div>
    <?php } ?>
</div>
<hr />
<div class="container">
    <h3>Livros Recomendados</h3>
    <div class="span2">
      <a class="thumbnail" href="#">
        <img alt="" src="http://placehold.it/120x160">
      </a>
    </div>
    <div class="span2">
      <a class="thumbnail" href="#">
        <img alt="" src="http://placehold.it/120x160">
      </a>
    </div>
    <div class="span2">
      <a class="thumbnail" href="#">
        <img alt="" src="http://placehold.it/120x160">
      </a>
    </div>
    <div class="span2">
      <a class="thumbnail" href="#">
        <img alt="" src="http://placehold.it/120x160">
      </a>
    </div>
    <div class="span2">
      <a class="thumbnail" href="#">
        <img alt="" src="http://placehold.it/120x160">
      </a>
    </div>
</div>