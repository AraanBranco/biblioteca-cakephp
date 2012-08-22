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
      'capa' => array(
        'fields' => array(
          'dir' => 'photo_dir'
          ),
        'thumbnailMethod' => 'php',
        'thumbnailSizes' => array(
            'thumb' => '120x160'
          ),
        'thumbnailPrefixStyle' => false
        )
    )
  );

}
?>