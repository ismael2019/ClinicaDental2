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

<center><h1 id="titulotabla">FORMULARIO PARA EDITAR EL HISTORIAL</h1></center>
<BR>
<div id="formulario">
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
 <br>
    <br> <br>
    <br>