<?php
class Genero extends AppModel {
  public $name = 'Genero';

  public $validate = array(
    'genero' => array(
        'rule'    => 'notEmpty',
        'require' => true
      ),
    'classificacao' => array(
      'rule' => 'numeric',
      'required' => true
      )
    );
}
?>