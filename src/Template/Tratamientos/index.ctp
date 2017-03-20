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
             <li><?= $this->Html->link('4.CuentaPago',['controller'=>'cuentas','action'=>'add'])?></li>
            <li><?= $this->Html->link('RecetasMedicas',['controller'=>'recetas','action'=>'add'])?></li>
            <li><?= $this->Html->link('ListadePacientes',['controller'=>'pacientes','action'=>'index'])?></li>
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
                <th>ortodoncia</th>
                <th>endodoncia</th>
                <th>periodoncia</th>
                <th>protesis_dental</th>
                <th>implantologia</th>
                <th>estetica_dental</th>
                <th>blanqueamiento_dental</th>
                <th>caries</th>
                <th>rehabilitacion_oral</th>
                <th>apicectomia</th>
                <th>quistes</th>
                <th>extraccion_3er_molar</th>
                <th>tipo_de_pago</th>
                <th>costo_total</th>
                <th>created</th>
                <th>modified</th>
                <th>Actions</th>
            </tr>
       
            <?php foreach ($tratamientos as $tratamiento): ?>
             <tr class="success">
                <td><?= $this->Number->format($tratamiento->id) ?></td>
                <td><?= $tratamiento->has('paciente') ? $this->Html->link($tratamiento->paciente->id, ['controller' => 'Pacientes', 'action' => 'view', $tratamiento->paciente->id]) : '' ?></td>
                <td><?= $this->Number->format($tratamiento->ortodoncia) ?></td>
                <td><?= $this->Number->format($tratamiento->endodoncia) ?></td>
                <td><?= $this->Number->format($tratamiento->periodoncia) ?></td>
                <td><?= $this->Number->format($tratamiento->protesis_dental) ?></td>
                <td><?= $this->Number->format($tratamiento->implantologia) ?></td>
                <td><?= $this->Number->format($tratamiento->estetica_dental) ?></td>
                <td><?= $this->Number->format($tratamiento->blanqueamiento_dental) ?></td>
                <td><?= $this->Number->format($tratamiento->caries) ?></td>
                <td><?= $this->Number->format($tratamiento->rehabilitacion_oral) ?></td>
                <td><?= $this->Number->format($tratamiento->apicectomia) ?></td>
                <td><?= $this->Number->format($tratamiento->quistes) ?></td>
                <td><?= $this->Number->format($tratamiento->extraccion_3er_molar) ?></td>
                <td><?= h($tratamiento->tipo_de_pago) ?></td>
                <td><?= $this->Number->format($tratamiento->costo_total) ?></td>
                <td><?= h($tratamiento->created) ?></td>
                <td><?= h($tratamiento->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tratamiento->id],['class'=>'btn btn-info']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tratamiento->id],['class'=>'btn btn-success']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tratamiento->id],['class'=>'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $tratamiento->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
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