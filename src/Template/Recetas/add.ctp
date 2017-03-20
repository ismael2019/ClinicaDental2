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
            <li><?= $this->Html->link('Agregar Receta',['controller'=>'recetas','action'=>'add'])?></li>
            <li><?= $this->Html->link('Lista de Recetas',['controller'=>'recetas','action'=>'index'])?></li>
            <li><?= $this->Html->link('volver',['controller'=>'pacientes','action'=>'index'])?></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
      <div class="clearfix"> </div>
    </div>
 <!-- script-for-menu -->
                             <script>
                               $( "span.menu" ).click(function() {
                                 $( "ul.nav1" ).slideToggle( 300, function() {
                                 // Animation complete.
                                  });
                                 });
                            </script>
                        <!-- /script-for-menu -->
                        <br>
<div class="jumbotron" id="sugerencia">
        <div class="container" id="contenidoinicio">
            <center><h1>Formulario de Registro</h1></center>
       </div>
<br>
    <?= $this->Form->create($receta) ?>
    <fieldset>
        
        <?php
            echo $this->Form->input('paciente_id',['class'=>'form-control'], ['options' => $pacientes]);
            echo $this->Form->input('detalle_de_la_receta',['class'=>'form-control']);
        ?>
    </fieldset>
    <br>
    <center><?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?></center>
    <?= $this->Form->end() ?>
</div>
<br>
<br>
<br>
<br>
<br>