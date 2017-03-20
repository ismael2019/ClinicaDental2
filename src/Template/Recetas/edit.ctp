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

<center><h1 id="titulotabla">FORMULARIO PARA EDITAR LA RECETA MEDICA</h1></center>
<BR>
<div id="formulario">
    <?= $this->Form->create($receta) ?>
    <fieldset>
        <?php
            echo $this->Form->input('paciente_id',['class'=>'form-control'], ['options' => $pacientes]);
            echo $this->Form->input('detalle_de_la_receta',['class'=>'form-control']);
        ?>
    </fieldset>
   <center> <?= $this->Form->button(__('Cambiar'),['class'=>'btn btn-primary']) ?> </center>
    <?= $this->Form->end() ?>
</div>
