<?php
class Autor extends AppModel {
  public $name = 'Autor';

  public $validate = array(
    'nome' => array(
        'rule'    => 'notEmpty',
        'require' => true
      ),
    );
}
?>
