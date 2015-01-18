
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		News
	</title>
	<?php
		

		
                echo $this->Html->css('bootstrap.min.css');
                echo $this->Html->css('style');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
<div id='wrapper'>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">News</a>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li class="active">
                    <?php echo $this->Html->link( 'Новини', array( 'controller' => 'home', 'action' => 'index', 'full_base' => true ) ) ?>
                </li>
                <li>

                    <?php echo $this->Html->link( 'Добавене на новина', array( 'controller' => 'home', 'action' => 'add', 'full_base' => true ) ) ?>

                </li>
                
                
                 <li>

                    <?php echo $this->Html->link( 'Добавене на снимки', array( 'controller' => 'images', 'action' => 'add', 'full_base' => true ) ) ?>

                </li>
            </ul>
        </div>
    </div>
</nav>
<?php echo $this->fetch('content'); ?>
</div>


</body>
</html>