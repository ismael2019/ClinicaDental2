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

<center><h1 id="titulotabla">FORMULARIO PARA EDITAR AL PACIENTE</h1></center>
<BR>
<div id="formulario">
<div class="pacientes form large-9 medium-8 columns content">
    <?= $this->Form->create($paciente) ?>
    <fieldset>
   <h2>Ingrese el campo a modificar:</h2>     
        <?php
            echo $this->Form->input('nombre',['class'=>'form-control']);
            echo $this->Form->input('apellido',['class'=>'form-control']);
            echo $this->Form->input('sexo',['class'=>'form-control']);
            echo $this->Form->input('edad',['class'=>'form-control']);
            echo $this->Form->input('ci',['class'=>'form-control']);
            echo $this->Form->input('ciudad',['class'=>'form-control']);
            echo $this->Form->input('telf_o_cel',['class'=>'form-control']);
            echo $this->Form->input('email',['class'=>'form-control']);
            echo $this->Form->input('user_id',['class'=>'form-control'], ['options' => $users]);
        ?>
    </fieldset>
    <BR>
    <center> <?= $this->Form->button(__('Cambiar'),['class'=>'btn btn-primary']) ?> </center>
    <?= $this->Form->end() ?>
</div>
