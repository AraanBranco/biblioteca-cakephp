<?php
  echo $this->set('title_for_layout', 'Autor');
?>
<div class="container">
  <h1>Editando Autor</h1>

  <form action="<?php echo $this->here; ?>" method="post">

  <div class="control-group <?php echo isset($errors['autor']) ? 'error' : null ?>">
    <label class="control-label" for="autor">Autor</label>
    <div class="controls">
      <input type="text" <?php echo isset($errors['autor']) ? 'id="inputError"' : null ?> name="autor" value="<?php echo isset($data['autor']) ? $data['autor'] : null ?>">
    </div>
  </div>

  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn">Salvar</button>
    </div>
  </div>
  </form>
</div>