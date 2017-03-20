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
            <li><?= $this->Html->link('Agregar Cuenta',['controller'=>'cuentas','action'=>'add'])?></li>
            <li><?= $this->Html->link('Lista de Cuentas',['controller'=>'cuentas','action'=>'index'])?></li>
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
    <?= $this->Form->create($cuenta) ?>
    <fieldset>
        <legend><?= __('Add Cuenta') ?></legend>
        <?php
            echo $this->Form->input('tratamiento_id',['class'=>'form-control'], ['options' => $tratamientos]);
            echo $this->Form->input('costo_total',['class'=>'form-control']);
            echo $this->Form->input('cancelado',['class'=>'form-control']);
            echo $this->Form->input('saldo_por_pagar',['class'=>'form-control']);
        ?>
    </fieldset>
    <center><?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?></center>
    <?= $this->Form->end() ?>
</div>
