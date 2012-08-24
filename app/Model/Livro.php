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
    'MeioUpload.MeioUpload' => array(
      'capa' => array(
        'uplaodName' => '{Nome}',
        'dir' => 'uploads{DS}{ModelName}{DS}{fieldName}',
        'allowed_ext' => array('.jpg', '.jpeg', '.png'),
        'zoomCrop' => true,
        'thumbnailQuality' => 90,
        'thumbsizes' => array(
          'thumb' => array('width' => 140, 'height' => 200)
          )
        )
    )
  );

}
?>