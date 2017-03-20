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

<center><h1 id="titulotabla">TABLA DE PACIENTES</h1></center>
<br>
<h1 id="titulosugerenciau">DETALLES DEL PACIENTE:</h1>
  <center><h1 id="titulosugerenciau"><?= h($paciente->nombre) ?></h1></center>
    <br>
    <div class="table-responsive">
   <table class="table table-condensed">
        <tr class="warning">
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Sexo</th>
            <th>Ci</th>
            <th>Ciudad</th>
            <th>Email</th>
            <th>User</th>
            <th>Id</th>
            <th>Edad</th>
            <th>Telf O Cel</th>
            <th>Created</th>
            <th>'Modified</th>
        </tr>
        <tr class="success">
            <td><?= h($paciente->nombre) ?></td>
            <td><?= h($paciente->apellido) ?></td>
            <td><?= h($paciente->sexo) ?></td>
            <td><?= h($paciente->ci) ?></td>
            <td><?= h($paciente->ciudad) ?></td>
            <td><?= h($paciente->email) ?></td>
            <td><?= $paciente->has('user') ? $this->Html->link($paciente->user->id, ['controller' => 'Users', 'action' => 'view', $paciente->user->id]) : '' ?></td>
            <td><?= $this->Number->format($paciente->id) ?></td>
            <td><?= $this->Number->format($paciente->edad) ?></td>
            <td><?= $this->Number->format($paciente->telf_o_cel) ?></td>
            <td><?= h($paciente->created) ?></td>
            <td><?= h($paciente->modified) ?></td>
        </tr>
            
      
    </table>
    <div class="related">
        <h4>HISTORIALES MEDICOS</h4>
        <?php if (!empty($paciente->historiales)): ?>
         <table class="table table-condensed">
        <tr class="warning">
                <th>Id</th>
                <th>Problemas Del Corazon</th>
                <th>Presion Sanguinea Alta</th>
                <th>Problemas Circulatorios</th>
                <th>Problemas Nerviosos</th>
                <th>RadioTerapia</th>
                <th>Valvulas Del Corazon Artificiales</th>
                <th>Perdida De Peso</th>
                <th>Problemas De Espalda</th>
                <th>Enfermedades Respiratorias</th>
                <th>Diabetes</th>
                <th>Presion Sanguinea Baja</th>
                <th>Epilepsia</th>
                <th>Hepatitis</th>
                <th>Cancer</th>
                <th>Tratamiento Siquiatrico</th>
                <th>Dieta Especial</th>
                <th>Enfermedades De La Sangre</th>
                <th>Artitris</th>
                <th>Glandulas Del Cuello Hinchadas</th>
                <th>Fiebre Reumatica</th>
                <th>VIH</th>
                <th>Embolia Cerebral</th>
                <th>Ulceras</th>
                <th>Enfermedades Venereas</th>
                <th>Hemofilia</th>
                <th>Osteoporosis</th>
                <th>Enfermedades De Higado</th>
                <th>Diarrea Cronica</th>
                <th>Drogadiccion</th>
                <th>Otros</th>
                <th>Alergias A Anestesias</th>
                <th>Alergias A Medicinas</th>
                <th>Alergias Generales</th>
                <th>Created</th>
                <th>Modified</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($paciente->historiales as $historiales): ?>
           <tr class="success">
                <td><?= h($historiales->id) ?></td>
                <td><?= h($historiales->problemas_del_corazon) ?></td>
                <td><?= h($historiales->presion_sanguinea_alta) ?></td>
                <td><?= h($historiales->problemas_circulatorios) ?></td>
                <td><?= h($historiales->problemas_nerviosos) ?></td>
                <td><?= h($historiales->radioTerapia) ?></td>
                <td><?= h($historiales->valvulas_del_corazon_artificiales) ?></td>
                <td><?= h($historiales->perdida_de_peso) ?></td>
                <td><?= h($historiales->problemas_de_espalda) ?></td>
                <td><?= h($historiales->enfermedades_respiratorias) ?></td>
                <td><?= h($historiales->diabetes) ?></td>
                <td><?= h($historiales->presion_sanguinea_baja) ?></td>
                <td><?= h($historiales->epilepsia) ?></td>
                <td><?= h($historiales->hepatitis) ?></td>
                <td><?= h($historiales->cancer) ?></td>
                <td><?= h($historiales->tratamiento_siquiatrico) ?></td>
                <td><?= h($historiales->dieta_especial) ?></td>
                <td><?= h($historiales->enfermedades_de_la_sangre) ?></td>
                <td><?= h($historiales->artitris) ?></td>
                <td><?= h($historiales->glandulas_del_cuello_hinchadas) ?></td>
                <td><?= h($historiales->fiebre_reumatica) ?></td>
                <td><?= h($historiales->VIH) ?></td>
                <td><?= h($historiales->embolia_cerebral) ?></td>
                <td><?= h($historiales->ulceras) ?></td>
                <td><?= h($historiales->enfermedades_venereas) ?></td>
                <td><?= h($historiales->hemofilia) ?></td>
                <td><?= h($historiales->osteoporosis) ?></td>
                <td><?= h($historiales->enfermedades_de_higado) ?></td>
                <td><?= h($historiales->diarrea_cronica) ?></td>
                <td><?= h($historiales->drogadiccion) ?></td>
                <td><?= h($historiales->otros) ?></td>
                <td><?= h($historiales->alergias_a_anestesias) ?></td>
                <td><?= h($historiales->alergias_a_medicinas) ?></td>
                <td><?= h($historiales->alergias_generales) ?></td>
                <td><?= h($historiales->created) ?></td>
                <td><?= h($historiales->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Historiales', 'action' => 'view', $historiales->id],['class'=>'btn btn-info']) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Historiales', 'action' => 'edit', $historiales->id],['class'=>'btn btn-success']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Historiales', 'action' => 'delete', $historiales->id],['class'=>'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $historiales->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4>RECETAS</h4>
        <?php if (!empty($paciente->recetas)): ?>
         <table class="table table-condensed">
        <tr class="warning">
                <th>Id</th>
                <th>Detalle De La Receta</th>
                <th>Created</th>
                <th>Modified</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($paciente->recetas as $recetas): ?>
          <tr class="success">
                <td><?= h($recetas->id) ?></td>
                <td><?= h($recetas->detalle_de_la_receta) ?></td>
                <td><?= h($recetas->created) ?></td>
                <td><?= h($recetas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Recetas', 'action' => 'view', $recetas->id],['class'=>'btn btn-info']) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Recetas', 'action' => 'edit', $recetas->id],['class'=>'btn btn-success']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Recetas', 'action' => 'delete', $recetas->id],['class'=>'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $recetas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4>TRATAMIENTOS</h4>
        <?php if (!empty($paciente->tratamientos)): ?>
        <table class="table table-condensed">
        <tr class="warning">
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
                <th>Tipo De Pago</th>
                <th>Costo Total</th>
                <th>Created</th>
                <th>Modified</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($paciente->tratamientos as $tratamientos): ?>
            <tr class="success">
                <td><?= h($tratamientos->id) ?></td>
                <td><?= h($tratamientos->ortodoncia) ?></td>
                <td><?= h($tratamientos->endodoncia) ?></td>
                <td><?= h($tratamientos->periodoncia) ?></td>
                <td><?= h($tratamientos->protesis_dental) ?></td>
                <td><?= h($tratamientos->implantologia) ?></td>
                <td><?= h($tratamientos->estetica_dental) ?></td>
                <td><?= h($tratamientos->blanqueamiento_dental) ?></td>
                <td><?= h($tratamientos->caries) ?></td>
                <td><?= h($tratamientos->rehabilitacion_oral) ?></td>
                <td><?= h($tratamientos->apicectomia) ?></td>
                <td><?= h($tratamientos->quistes) ?></td>
                <td><?= h($tratamientos->extraccion_3er_molar) ?></td>
                <td><?= h($tratamientos->tipo_de_pago) ?></td>
                <td><?= h($tratamientos->costo_total) ?></td>
                <td><?= h($tratamientos->created) ?></td>
                <td><?= h($tratamientos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tratamientos', 'action' => 'view', $tratamientos->id],['class'=>'btn btn-info']) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tratamientos', 'action' => 'edit', $tratamientos->id],['class'=>'btn btn-success']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tratamientos', 'action' => 'delete', $tratamientos->id],['class'=>'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $tratamientos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
