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
}
?>