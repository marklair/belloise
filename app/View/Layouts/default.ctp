<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title><?php echo $title_for_layout; ?></title>
	<?php
		echo $this->Html->meta('icon');
		//echo $this->Html->css('cake.generic');
		echo $this->Html->css(array('reset', 'text', 'grid', 'layout', 'nav', 'master', 'mobile.min'));
		//echo $this->Html->css(array('reset', 'text', 'grid', 'layout', 'nav'));
		echo '<!--[if IE 6]>'.$this->Html->css('ie6').'<![endif]-->';
		echo '<!--[if IE 7]>'.$this->Html->css('ie').'<![endif]-->';
		echo $this->Html->script(array('jquery-1.3.2.min.js', 'jquery-ui.js', 'jquery-fluid16.js', 'adapthack.js', 'adapt.min.js', 'jqscripts.js'));
		echo '	<script>
		$(document).bind("mobileinit", function () {
			$.mobile.ajaxEnabled = false;
		});
	</script>';
		echo $scripts_for_layout;
	?>
</head>
<body>

	<div class="container_16">			
		<div class="grid_16">
			<h1 id="branding">
				<a href="/">Belloise Inventory Control System</a>
			</h1>
		</div>
		<div class="clear"></div>
<!-- 		<div class="grid_12">
			 <?php // Possible menu here ?>
		</div> -->
		<div class="clear" style="height: 10px; width: 100%;"></div>		
		<div class="grid_4">
			<div class="box menu">
				<?php
					echo $this->element('navbar');
				?>
			</div>
		</div>
		<div class="grid_12">

			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>

		<div class="clear"></div>
	</div>
<!--	
	<?php echo $this->element('sql_dump'); ?>
-->
	<script type="text/javascript">
		$("#section menu").accordion({
            navigation: true
        }); 
	</script>
</body>
</html>
