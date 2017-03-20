
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
<br>

<center><h1 id="titulotabla">TABLA DE TRATAMIENTOS</h1></center>
<br>
    <center><h1 id="titulosugerenciau"><?= h($tratamiento->id) ?></h1>
    <br>
    <div class="table-responsive">
   <table class="table table-condensed">
        <tr class="warning">
            <th>Paciente</th>
            <th>Tipo De Pago</th>
            <th>Id</th>
            <th>Ortodoncia</th>
            <th>Endodoncia</th>
            <th>Periodoncia</th>
            <th>Protesis Dental</th>
            <th>Implantologia</th>
            <th>Estetica Dental</th>
            <th>Blanqueamiento Dental</th>
            <th>Caries</th>
            <th>Rehabilitacion Oral</th>
            <th>Apicectomia</th>
            <th>Quistes</th>
            <th>Extraccion 3er Molar</th>
            <th>Costo Total</th>
            <th>Created</th>
            <th>Modified</th>
           
        </tr>
        <tr class="success">
            <td><?= $tratamiento->has('paciente') ? $this->Html->link($tratamiento->paciente->id, ['controller' => 'Pacientes', 'action' => 'view', $tratamiento->paciente->id]) : '' ?></td>
            <td><?= h($tratamiento->tipo_de_pago) ?></td>
            <td><?= $this->Number->format($tratamiento->id) ?></td>
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
            <td><?= $this->Number->format($tratamiento->costo_total) ?></td>
            <td><?= h($tratamiento->created) ?></td>
            <td><?= h($tratamiento->modified) ?></td>
        </tr>
       
    </table>
    <div class="related">
        <h4>CUENTAS</h4>
        <?php if (!empty($tratamiento->cuentas)): ?>
        <table class="table table-condensed">
        <tr class="warning">
                <th>Id</th>
                <th>Tratamiento Id</th>
                <th>Costo Total</th>
                <th>Cancelado</th>
                <th>Saldo Por Pagar</th>
                <th>Created</th>
                <th>Modified</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($tratamiento->cuentas as $cuentas): ?>
            <tr class="success">    
                <td><?= h($cuentas->id) ?></td>
                <td><?= h($cuentas->tratamiento_id) ?></td>
                <td><?= h($cuentas->costo_total) ?></td>
                <td><?= h($cuentas->cancelado) ?></td>
                <td><?= h($cuentas->saldo_por_pagar) ?></td>
                <td><?= h($cuentas->created) ?></td>
                <td><?= h($cuentas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Cuentas', 'action' => 'view', $cuentas->id],['class'=>'btn btn-info']) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Cuentas', 'action' => 'edit', $cuentas->id],['class'=>'btn btn-success']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cuentas', 'action' => 'delete', $cuentas->id],['class'=>'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $cuentas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
