<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'SB - Sistema de Biblioteca');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('theme');
		?>
		<style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
	<?php
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div class="navbar navbar-fixed-top">
	  <div class="navbar-inner">
	    <div class="container">
	      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </a>
	      <a class="brand" href="#">SB</a>
	      <div class="btn-group pull-right">
	        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
	          <i class="icon-user"></i> Usuário
	          <span class="caret"></span>
	        </a>
	        <ul class="dropdown-menu">
	          <li><a href="#">Profile</a></li>
	          <li class="divider"></li>
	          <li><a href="#">Sign Out</a></li>
	        </ul>
	      </div>
	      <div class="nav-collapse">
	        <ul class="nav">
	          <li class="active"><a href="#">Home</a></li>
	          <li><a href="livros/">Livros</a></li>
	          <li><a href="#contact">Autores</a></li>
	        </ul>
	      </div><!--/.nav-collapse -->
	    </div>
	  </div>
	</div>
	<!-- /navbar -->

	<div class="container-fluid">
		<?php echo $this->fetch('content');?>
	</div>
	<hr />

	<div class="container">
		<div class="row">
			<div class="span8">
				Sistema de gerenciamento para biblioteca - Desenvolvido por <?php echo $this->Html->link('Araan Branco', 'http://facebook.com/AraanBranco',array('target' => 'blank') ); ?>
			</div>		
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
