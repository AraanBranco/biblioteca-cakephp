<?php
$id = $_POST['id'];
$nome = $_POST['nome'];
$targetFolder = '/app/webroot/img/livros/'; // Relative to the root

if (!empty($_FILES)) {
  $tempFile = $_FILES['Filedata']['tmp_name'];
  $targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
  $targetFile = rtrim($targetPath,'/') . '/' . $_FILES['Filedata']['name'];

  // Validate the file type
  $fileTypes = array('jpg','jpeg','gif','png'); // File extensions
  $fileParts = pathinfo($nome);

  if (in_array($fileParts['extension'],$fileTypes)) {
    move_uploaded_file($tempFile,$targetFile);
  } else {
    echo 'Tipo de arquivo inválido.';
  }
}
?>