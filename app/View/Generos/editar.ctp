<?php
  echo $this->set('title_for_layout', 'Autor');
?>
<div class="container">
  <h1>Editando Autor</h1>

  <form action="<?php echo $this->here; ?>" method="post">

  <div class="control-group <?php echo isset($errors['genero']) ? 'error' : null ?>">
    <label class="control-label" for="genero">Genero</label>
    <div class="controls">
      <input type="text" <?php echo isset($errors['genero']) ? 'id="inputError"' : null ?> name="genero" value="<?php echo isset($data['Genero']['genero']) ? $data['Genero']['genero'] : null ?>">
    </div>
  </div>

  <div class="control-group <?php echo isset($errors['classificacao']) ? 'error' : null ?>">
    <label class="control-label" for="classificacao">Classificacao</label>
    <div class="controls">
      <input type="text" <?php echo isset($errors['classificacao']) ? 'id="inputError"' : null ?> name="classificacao" class="input-mini" value="<?php echo isset($data['Genero']['classificacao']) ? $data['Genero']['classificacao'] : null ?>">
    </div>
  </div>

  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn">Salvar</button>
    </div>
  </div>
  </form>
</div>