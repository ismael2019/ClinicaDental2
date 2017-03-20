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
            <li><?= $this->Html->link('Agregar Paciente',['controller'=>'pacientes','action'=>'add'])?></li>
            <li><?= $this->Html->link('Lista de Pacientes',['controller'=>'pacientes','action'=>'index'])?></li>
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
    <?= $this->Form->create($paciente) ?>
    <fieldset>
        
        <?php
            echo $this->Form->input('nombre',['class'=>'form-control']);
            echo $this->Form->input('apellido',['class'=>'form-control']);
            echo $this->Form->input('sexo',['class'=>'form-control', 'options' => ['masculino' => 'M', 'femenino' => 'F']]);
            echo $this->Form->input('edad',['class'=>'form-control']);
            echo $this->Form->input('ci',['class'=>'form-control']);
            echo $this->Form->input('ciudad',['class'=>'form-control', 'options' => ['cochabamba' => 'Cochabamba', 'SantaCruz' => 'SantaCruz', 'LaPaz' => 'LaPaz', 'Beni' => 'Beni', 'Oruro' => 'Oruro', 'Potosi' => 'Potosi', 'Tarija' => 'Tarija', 'Pando' => 'Pando', 'Sucre' => 'Sucre']]);
            echo $this->Form->input('telf_o_cel',['class'=>'form-control']);
            echo $this->Form->input('email',['class'=>'form-control']);
            echo $this->Form->input('user_id',['class'=>'form-control'], ['options' => $users]);
        ?>
    </fieldset>
    <br>
   <center> <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?></center>
    <?= $this->Form->end() ?>
    </div>
</div>
