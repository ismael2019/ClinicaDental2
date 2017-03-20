<div class="container">
            
            <div class="main">
                <ul id="cbp-bislideshow" class="cbp-bislideshow">
                    <li><img src="./webroot/img/1.jpg" alt="image01"/></li>
                    <li><img src="./webroot/img/3.jpg" alt="image02"/></li>
                    <li><img src="./webroot/img/7.jpg" alt="image03"/></li>
                    <li><img src="./webroot/img/11.jpg" alt="image04"/></li>
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
            <li><?= $this->Html->link('3.AgregarTratamientos',['controller'=>'tratamientos','action'=>'add'])?></li>
            <li><?= $this->Html->link('4.CuentaPago',['controller'=>'cuentas','action'=>'add'])?></li>
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
     <br>              
<div class="container">
            
            <div class="main">
                <ul id="cbp-bislideshow" class="cbp-bislideshow">
                    <li><?= $this->Html->image('1.jpg',['class'=>'img-responsive'])?></li>
                    <li><?= $this->Html->image('3.jpg',['class'=>'img-responsive'])?></li>
                    <li><?= $this->Html->image('7.jpg',['class'=>'img-responsive'])?></li>
                    <li><?= $this->Html->image('11.jpg',['class'=>'img-responsive'])?></li>
             </ul>
                
            </div>
        </div>
<br>
<center><h1 id="titulotabla">LISTA DE TRATAMIENTOS</h1></center>
<br>
<br>
<br>
<br>

<div class="table-responsive">
    <table class="table table-condensed">
       
            <tr class="warning">
                <th>id</th>
                <th>paciente_id</th>
                <th>problemas_del_corazon</th>
                <th>presion_sanguinea_alta</th>
                <th>problemas_circulatorios</th>
                <th>problemas_nerviosos</th>
                <th>radioTerapia</th>
                <th>valvulas_del_corazon_artificiales</th>
                <th>perdida_de_peso</th>
                <th>problemas_de_espalda</th>
                <th>enfermedades_respiratorias</th>
                <th>diabetes</th>
                <th>presion_sanguinea_baja</th>
                <th>epilepsia</th>
                <th>hepatitis</th>
                <th>cancer</th>
                <th>tratamiento_siquiatrico></th>
                <th>dieta_especial</th>
                <th>enfermedades_de_la_sangre</th>
                <th>artitris</th>
                <th>glandulas_del_cuello_hinchadas</th>
                <th>fiebre_reumatica</th>
                <th>VIH</th>
                <th>embolia_cerebral</th>
                <th>ulceras</th>
                <th>enfermedades_venereas</th>
                <th>hemofilia</th>
                <th>osteoporosis</th>
                <th>enfermedades_de_higado</th>
                <th>diarrea_cronica</th>
                <th>drogadiccion</th>
                <th>otros</th>
                <th>alergias_a_anestesias</th>
                <th>alergias_a_medicinas</th>
                <th>alergias_generales</th>
                <th>created</th>
                <th>modified</th>
                <th>Actions</th>
            </tr>
        
            <?php foreach ($historiales as $historiale): ?>
             <tr class="warning">
                <td><?= $this->Number->format($historiale->id) ?></td>
                <td><?= $historiale->has('paciente') ? $this->Html->link($historiale->paciente->id, ['controller' => 'Pacientes', 'action' => 'view', $historiale->paciente->id]) : '' ?></td>
                <td><?= h($historiale->problemas_del_corazon) ?></td>
                <td><?= h($historiale->presion_sanguinea_alta) ?></td>
                <td><?= h($historiale->problemas_circulatorios) ?></td>
                <td><?= h($historiale->problemas_nerviosos) ?></td>
                <td><?= h($historiale->radioTerapia) ?></td>
                <td><?= h($historiale->valvulas_del_corazon_artificiales) ?></td>
                <td><?= h($historiale->perdida_de_peso) ?></td>
                <td><?= h($historiale->problemas_de_espalda) ?></td>
                <td><?= h($historiale->enfermedades_respiratorias) ?></td>
                <td><?= h($historiale->diabetes) ?></td>
                <td><?= h($historiale->presion_sanguinea_baja) ?></td>
                <td><?= h($historiale->epilepsia) ?></td>
                <td><?= h($historiale->hepatitis) ?></td>
                <td><?= h($historiale->cancer) ?></td>
                <td><?= h($historiale->tratamiento_siquiatrico) ?></td>
                <td><?= h($historiale->dieta_especial) ?></td>
                <td><?= h($historiale->enfermedades_de_la_sangre) ?></td>
                <td><?= h($historiale->artitris) ?></td>
                <td><?= h($historiale->glandulas_del_cuello_hinchadas) ?></td>
                <td><?= h($historiale->fiebre_reumatica) ?></td>
                <td><?= h($historiale->VIH) ?></td>
                <td><?= h($historiale->embolia_cerebral) ?></td>
                <td><?= h($historiale->ulceras) ?></td>
                <td><?= h($historiale->enfermedades_venereas) ?></td>
                <td><?= h($historiale->hemofilia) ?></td>
                <td><?= h($historiale->osteoporosis) ?></td>
                <td><?= h($historiale->enfermedades_de_higado) ?></td>
                <td><?= h($historiale->diarrea_cronica) ?></td>
                <td><?= h($historiale->drogadiccion) ?></td>
                <td><?= h($historiale->otros) ?></td>
                <td><?= h($historiale->alergias_a_anestesias) ?></td>
                <td><?= h($historiale->alergias_a_medicinas) ?></td>
                <td><?= h($historiale->alergias_generales) ?></td>
                <td><?= h($historiale->created) ?></td>
                <td><?= h($historiale->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $historiale->id],['class'=>'btn btn-info']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $historiale->id],['class'=>'btn btn-success']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $historiale->id],['class'=>'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $historiale->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
       </table>
  <div class="paginator">
      <center>  <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous'),['class'=>'btn btn-info']) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >',['class'=>'btn btn-info']) ?>
        </ul> </center>
       <center> <p><?= $this->Paginator->counter() ?></p> </center>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>