<?php
class Livro extends AppModel {
  public $name = 'Livro';
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
        'dir' => 'uploads{DS}{ModelName}{DS}{fieldName}',
        'allowed_ext' => array('.jpg', '.jpeg', '.png'),
        'thumbnailQuality' => 90,
        'thumbnailDir' => false,
        'thumbsizes' => array(
          'thumb' => array('width' => 140, 'height' => 200, 'forceAscpectRatio' => 'C')
          ),
        'zoomCrop' => true,
        )
    )
  );

}
?>