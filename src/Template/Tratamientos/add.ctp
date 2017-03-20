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
            <li><?= $this->Html->link('Agregar Tratamientos',['controller'=>'tratamientos','action'=>'add'])?></li>
            <li><?= $this->Html->link('Lista de Tratamientos',['controller'=>'tratamientos','action'=>'index'])?></li>
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
    <?= $this->Form->create($tratamiento) ?>
    <fieldset>
       
        <?php
            echo $this->Form->input('paciente_id',['class'=>'form-control'], ['options' => $pacientes]);
        ?>
        <h2>Seleccione Tratamientos:</h2>
        <?php
            echo $this->Form->input('ortodoncia', ['type' => 'checkbox']);
            echo $this->Form->input('endodoncia', ['type' => 'checkbox']);
            echo $this->Form->input('periodoncia', ['type' => 'checkbox']);
            echo $this->Form->input('protesis_dental', ['type' => 'checkbox']);
            echo $this->Form->input('implantologia', ['type' => 'checkbox']);
            echo $this->Form->input('estetica_dental', ['type' => 'checkbox']);
            echo $this->Form->input('blanqueamiento_dental', ['type' => 'checkbox']);
            echo $this->Form->input('caries', ['type' => 'checkbox']);
            echo $this->Form->input('rehabilitacion_oral', ['type' => 'checkbox']);
            echo $this->Form->input('apicectomia', ['type' => 'checkbox']);
            echo $this->Form->input('quistes', ['type' => 'checkbox']);
            echo $this->Form->input('extraccion_3er_molar', ['type' => 'checkbox']);
            echo $this->Form->input('tipo_de_pago',['class'=>'form-control']);
            echo $this->Form->input('costo_total',['class'=>'form-control']);
        ?>
    </fieldset>
    <br>
    <center><?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?></center>
    <?= $this->Form->end() ?>
</div>