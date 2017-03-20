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
    <?= $this->Form->create($historiale) ?>
    <fieldset>
        <h2>Elija al paciente que tendra el historial:</h2>
        <?php
            echo $this->Form->input('paciente_id',['class'=>'form-control'] , ['options' => $pacientes]);
        ?>
         <h2>Seleccione Problemas del paciente:</h2>
        <?php
            echo $this->Form->input('problemas_del_corazon');
            echo $this->Form->input('presion_sanguinea_alta');
            echo $this->Form->input('problemas_circulatorios');
            echo $this->Form->input('problemas_nerviosos');
            echo $this->Form->input('radioTerapia');
            echo $this->Form->input('valvulas_del_corazon_artificiales');
            echo $this->Form->input('perdida_de_peso');
            echo $this->Form->input('problemas_de_espalda');
            echo $this->Form->input('enfermedades_respiratorias');
            echo $this->Form->input('diabetes');
            echo $this->Form->input('presion_sanguinea_baja');
            echo $this->Form->input('epilepsia');
            echo $this->Form->input('hepatitis');
            echo $this->Form->input('cancer');
            echo $this->Form->input('tratamiento_siquiatrico');
            echo $this->Form->input('dieta_especial');
            echo $this->Form->input('enfermedades_de_la_sangre');
            echo $this->Form->input('artitris');
            echo $this->Form->input('glandulas_del_cuello_hinchadas');
            echo $this->Form->input('fiebre_reumatica');
            echo $this->Form->input('VIH');
            echo $this->Form->input('embolia_cerebral');
            echo $this->Form->input('ulceras');
            echo $this->Form->input('enfermedades_venereas');
            echo $this->Form->input('hemofilia');
            echo $this->Form->input('osteoporosis');
            echo $this->Form->input('enfermedades_de_higado');
            echo $this->Form->input('diarrea_cronica');
            echo $this->Form->input('drogadiccion');
            echo $this->Form->input('otros');
        ?>
        <h2>Seleccione Problemas del paciente:</h2>
        <?php
            echo $this->Form->input('alergias_a_anestesias');
            echo $this->Form->input('alergias_a_medicinas');
            echo $this->Form->input('alergias_generales');
        ?>
    </fieldset>
   <br>
    <center><?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?></center>
    <?= $this->Form->end() ?>
</div>
