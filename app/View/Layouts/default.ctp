<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$SiteDescription = __d('BestChong', 'BestChong: 最好的华人充值网');
$SiteURL = __d('BestChongURL', 'http://www.bestchong.com');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $SiteDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->charset();
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('css3','styles'));
		//echo $this->Html->css('cake.generic');
		echo $this->Html->script(array('jquery-1.10.0.min'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php //echo $this->Html->link($SiteDescription, $SiteURL); ?></h1>
		</div>
		<div id="content">
		    <header>
				<a href="#" id="logo"><img src="images/logo.png" width="221" height="100" alt="logo"/></a>    
				<nav>
					<ul>
						<li><a href="#" class="current">首页</a></li>
						<li><a href="#">立即充值</a></li>
						<li><a href="#">我的账户</a></li>
						<li><a href="#">关于我们</a></li>
						<li><a href="#">帮助</a></li>
					</ul>
				</nav><!--end menu-->
			</header><!--end header-->
		
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		
		<footer>
			<div class="container">  
				<div id="FooterTwo"> © 2013 BestChong.com </div>
				<div id="FooterTree"> Copyright </div> 
			</div>
		</footer>
	</div>
	<?php //echo $this->element('sql_dump');
		  echo $this->Js->writeBuffer(); 
	?>
</body>
</html>
