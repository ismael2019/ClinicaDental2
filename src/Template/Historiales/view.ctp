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
    <center><h1 id="titulosugerenciau">HITORIA DEL PACIENTE  <?php $this->Html->link($historiale->paciente->nombre)?></h1>
    <br>
    <div class="table-responsive">
   <table class="table table-condensed">
        <tr class="warning">
            <th>Paciente</th>
            <th>Id</th>
            <th>Created</th>
            <th>Modified</th>
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
           
        </tr>
      <tr class="success">
            <td><?= $historiale->has('paciente') ? $this->Html->link($historiale->paciente->nombre, ['controller' => 'Pacientes', 'action' => 'view', $historiale->paciente->id]) : '' ?></td>
            <td><?= $this->Number->format($historiale->id) ?></td>
            <td><?= h($historiale->created) ?></td>
            <td><?= h($historiale->modified) ?></td>
            <td><?= $historiale->problemas_del_corazon ? __('Yes') : __('No'); ?></td>
            <td><?= $historiale->presion_sanguinea_alta ? __('Yes') : __('No'); ?></td>
            <td><?= $historiale->problemas_circulatorios ? __('Yes') : __('No'); ?></td>
            <td><?= $historiale->problemas_nerviosos ? __('Yes') : __('No'); ?></td>
            <td><?= $historiale->radioTerapia ? __('Yes') : __('No'); ?></td>
            <td><?= $historiale->valvulas_del_corazon_artificiales ? __('Yes') : __('No'); ?></td>
            <td><?= $historiale->perdida_de_peso ? __('Yes') : __('No'); ?></td>
            <td><?= $historiale->problemas_de_espalda ? __('Yes') : __('No'); ?></td>
            <td><?= $historiale->enfermedades_respiratorias ? __('Yes') : __('No'); ?></td>
            <td><?= $historiale->diabetes ? __('Yes') : __('No'); ?></td>
            <td><?= $historiale->presion_sanguinea_baja ? __('Yes') : __('No'); ?></td>
            <td><?= $historiale->epilepsia ? __('Yes') : __('No'); ?></td>
            <td><?= $historiale->hepatitis ? __('Yes') : __('No'); ?></td>
            <td><?= $historiale->cancer ? __('Yes') : __('No'); ?></td>
            <td><?= $historiale->tratamiento_siquiatrico ? __('Yes') : __('No'); ?></td>
            <td><?= $historiale->dieta_especial ? __('Yes') : __('No'); ?></td>
            <td><?= $historiale->enfermedades_de_la_sangre ? __('Yes') : __('No'); ?></td>
            <td><?= $historiale->artitris ? __('Yes') : __('No'); ?></td>
            <td><?= $historiale->glandulas_del_cuello_hinchadas ? __('Yes') : __('No'); ?></td>
            <td><?= $historiale->fiebre_reumatica ? __('Yes') : __('No'); ?></td>
            <td><?= $historiale->VIH ? __('Yes') : __('No'); ?></td>
            <td><?= $historiale->embolia_cerebral ? __('Yes') : __('No'); ?></td>
            <td><?= $historiale->ulceras ? __('Yes') : __('No'); ?></td>
            <td><?= $historiale->enfermedades_venereas ? __('Yes') : __('No'); ?></td>
            <td><?= $historiale->hemofilia ? __('Yes') : __('No'); ?></td>
            <td><?= $historiale->osteoporosis ? __('Yes') : __('No'); ?></td>
            <td><?= $historiale->enfermedades_de_higado ? __('Yes') : __('No'); ?></td>
            <td><?= $historiale->diarrea_cronica ? __('Yes') : __('No'); ?></td>
            <td><?= $historiale->drogadiccion ? __('Yes') : __('No'); ?></td>
            <td><?= $historiale->otros ? __('Yes') : __('No'); ?></td>
            <td><?= $historiale->alergias_a_anestesias ? __('Yes') : __('No'); ?></td>
            <td><?= $historiale->alergias_a_medicinas ? __('Yes') : __('No'); ?></td>
            <td><?= $historiale->alergias_generales ? __('Yes') : __('No'); ?></td>
        </tr>
        
    </table>
</div>
