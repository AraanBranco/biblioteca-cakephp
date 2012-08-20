<?php
class Livro extends AppModel {
  public $nome = 'Livro';
  public $belongsTo = array(
    'Genero' => array(
      'foreignKey' => 'generos_id'
      ),
    'Autor' => array(
      'foreignKey' => 'autores_id'
      ),
    );

  public $actsAs = array(
    'Upload.Upload' => array(
      'resume',
      'capa' => array(
        'fields' => array(
          'dir' => 'photo_dir'
          ),
        'thumbnailMethod' => 'php',
        'thumbnailSizes' => array(
            'xvga' => '1024x768',
            'vga' => '640x480',
            'thumb' => '80x80'
          ),
        'thumbnailPrefixStyle' => false
        )
    )
  );
}
?>