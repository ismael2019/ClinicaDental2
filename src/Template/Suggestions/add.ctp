 <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">CLINICA DENTAL Y DE ESPECIALIDADES </a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            
            <li role="presentation"><?= $this->Html->link('Volver',['controller'=>'users', 'action'=>'login'])?></li>

            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

<div class="container">
            
            <div class="main">
                <ul id="cbp-bislideshow" class="cbp-bislideshow">
                    <li><img src="../webroot/img/1.jpg" alt="image01"/></li>
                    <li><img src="../webroot/img/3.jpg" alt="image02"/></li>
                    <li><img src="../webroot/img/7.jpg" alt="image03"/></li>
                    <li><img src="../webroot/img/11.jpg" alt="image04"/></li>
                </ul>
                
            </div>
        </div>

<br><br>
    <div class="jumbotron" id="sugerencia">
        <div class="container" id="contenidoinicio">
            <center><h1>Bienvenido</h1></center>
        <div class="container">
            <div class="row">
               <center> <h2>En esta Seccion podra dejarnos alguna sugerencia o mensaje que tenga para la clinica. </h2> </center><br><br>
                <h4>
                Debera proporcinar su nombre, apellido, correo electronico su telefono o celular y su mensaje.
                </h4>
                
                </div>
                
            </div>
        </div>
<br>

 <?= $this->Form->create($suggestion,['class'=>'form-group']) ?>
    <fieldset>
       <center><h1>Formulario para Registrar su mensaje o Sugerencia</h1></center>
        <?php
            echo $this->Form->input('username',['class'=>'form-control']);
            echo $this->Form->input('last_name',['class'=>'form-control']);
            echo $this->Form->input('email',['class'=>'form-control']);
            echo $this->Form->input('phone',['class'=>'form-control']);
            echo $this->Form->input('suggestion',['class'=>'form-control']);
        ?>
    </fieldset>
    <br>
    <center><?= $this->Form->button(__('Enviar'),['class'=>'btn btn-primary']) ?></center>
    <?= $this->Form->end() ?>
            </div>

      






    


<?= $this->Html->script(['jquery','bootstrap.min'])?>