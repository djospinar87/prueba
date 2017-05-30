<?php


$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->script(array('docs.min','jquery.min','bootstrap.min')) ?>
    
    <?= $this->Html->css(array('style.css','bootstrap.min', 'bootstrap-theme.min') ) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
    

<body>
    
    <?php echo $this->element('menu'); ?>
    <div class="container theme-showcase" role="main">

        <?= $this->Flash->render() ?>
        <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    </div>
    
    
    
    <footer>
    </footer>
</body>
</html>
