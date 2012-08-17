<?php
  echo $this->Html->script(array(
    'bootstrap-tab',
    'jquery.uploadify.min',
    'redactor'
    ), array('inline' => false));
  echo $this->Html->css(array(
    'redactor',
    'uploadify'
    ), null, array('inline' => false));
?>

<div class="container">
  <h1>Editar Livro: <?php echo $livros['Livro']['nome']?></h1>

  <div class="tabbable"> <!-- Only required for left/right tabs -->
        <ul class="nav nav-tabs" id="tabs-edit">
          <li class="active"><a href="#info" data-toggle="tab">Infos</a></li>
          <li><a href="#upload" data-toggle="tab">Upload</a></li>
          <li><a href="#editar" data-toggle="tab">Editar</a></li>
        </ul>

        <div class="tab-content">
          <!-- Infos -->
          <div class="tab-pane active" id="info">
            <div class="span11">
              <div class="span2">
                <h4>Autor:</h4> <h6><?php echo $livros['Autor']['autor']?></h6>
                <h4>Genero:</h4> <h6><?php echo $livros['Genero']['genero']?></h6>
                <h4>Classificação:</h4> <h6><?php echo $livros['Genero']['classificacao']?> anos</h6>
              </div> 

              <div class="span8">
              <?php if( $livros['Livro']['capa'] == NULL ) {
                echo '<h6>Sem fotos</h6>';
              } else { ?>
              <div class="thumbnail span2">
                <img src="<?php echo 'img/livros/'.$livros['Livro']['capa']; ?>" alt="<?php echo $livros['Livro']['nome']?>" width= 120 height=160>
              </div>
              <?php } ?>
              </div>
            </div>
            <div class="span11">
              <hr />

              <h4>Descrição</h4>
              <blockquote><?php echo $livros['Livro']['descricao']?></blockquote>
            </div>



          </div>
          <!-- /Infos -->

          <!-- Upload -->
          <div class="tab-pane" id="upload">
            <script type="text/javascript">
            $(document).ready(function() {
              $("#fileInput").uploadify({ 
                'uploader'       : '/files/upload.php',
                'buttonText'     : 'Enviar',
                'swf'            : '/files/uploadify.swf',
                'method'         : 'post',
                'formData'       : {'id' : '<?php echo $livros['Livro']['id']?>', 'nome' : '<?php echo Inflector::slug(strtolower($livros['Livro']['nome']));?>'},
                'folder'         : '/img/livros',
                'cancelImg'      : '/img/uploadify-cancel.png', 
                'fileExt'        : '*.JPG;*.jpg;*.jpeg;*.png;',
              }); 
            }); 
            </script> 
            <p><strong>Multiple File Upload</strong></p> 
            <input type="file" id="fileInput" name="file_upload">
            <a href="javascript:$('#fileInput').uploadifyClearQueue();">Clear 
            Queue</a> 
          </div>
          <!-- /Upload -->

          <!-- Editar -->
          <div class="tab-pane" id="editar">
            <?php
              echo $this->Form->create('Livro', array('action' => 'editar')),
                   $this->Form->input('id'),
                   $this->Form->input('nome'),
                   $this->Form->label('autores_id', 'Autor'),
                   $this->Form->select('autores_id', $selectAutores, array('empty' => false)),
                   $this->Form->label('generos_id', 'Genero'),
                   $this->Form->select('generos_id', $selectGeneros, array('empty' => false)),
                   $this->Form->textarea('descricao', array('class' => 'span12', 'rows' => '10'));
            ?>
            <div class="form-actions">
              <?php
                echo $this->Form->submit('Salvar', array('class' => 'btn btn-primary')),
                     $this->Form->end();
              ?>
            </div>
          </div>
          <!-- /Editar -->
        </div>
    </div>

</div>