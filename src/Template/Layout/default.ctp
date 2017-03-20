<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Clinica dental y de especialidades';
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

    <?= $this->Html->css(['bootstrap.min','bootstrap-theme','style','default','component','estilo','font-awesome','pnotify.custom.min']) ?>
    


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('script') ?>
    <?= $this->fetch('css') ?>

</head>

<body>

    
     <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <?= $this->Html->image('logooficialpng.png',['class'=>'img-responsive'])?>
            
          
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          <?php
            if ($current_user['role'] == 'dentista')
        {
        ?>
            <li><?= $this->Html->link('Pacientes',['controller'=>'pacientes','action'=>'index'])?></li>
            <li><?= $this->Html->link('Recetas Medicas',['controller'=>'recetas','action'=>'index'])?></li>
            <li role="presentation"><?= $this->Html->link('Buson de Sugerencias',['controller'=>'suggestions','action'=>'index'])?></li>
            <li><a href="#">Trabajos Protesis</a></li>
            <li><a href="#">Citas Pacientes</a></li>
        <?php } ?>

             <?php
            if ($current_user['role'] == 'protesista')
        {
        ?>
            <li><a href="#">Trabajos</a></li>
            <li><a href="#">Pacientes</a></li>
            <li><a href="#">Mensajes</a></li>
        <?php } ?>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
           
            <li role="presentation"><?= $this->Html->link('Cerrar Sesion',['controller'=>'users','action'=>'logout'])?></li>
          </ul>

        </div><!--/.nav-collapse -->
      </div>
      <?= $this->Flash->render() ?>
    </div>



    
    <div class="container clearfix">

        <?= $this->fetch('content') ?>
    </div>


   <?= $this->Html->script(['jquery','bootstrap.min','cbpBGSlideshow.min','jquery.imagesloaded.min','modernizr.custom','pnotify.custom.min'])?>
   
   <script>
            $(function() {
                cbpBGSlideshow.init();
            });
        </script>
    <footer class="text-center">
        
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Pagina para Registrar pacientes en una clinica odontologia Aplicando Responsive Web Desing &copy; 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>
  

</body>
</html>
