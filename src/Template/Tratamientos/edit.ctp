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

<center><h1 id="titulotabla">FORMULARIO PARA EDITAR EL TRATAMIENTO</h1></center>
<BR>
<div id="formulario">
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
            echo $this->Form->input('estetica_dental');
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
    <BR>
    <center> <?= $this->Form->button(__('Cambiar'),['class'=>'btn btn-primary']) ?> </center>
    <?= $this->Form->end() ?>
</div>
