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



<center><h1 id="titulotabla">FORMULARIO PARA EDITAR LA SUGERENCIA</h1></center>
<BR>
<div id="formulario">
    <?= $this->Form->create($suggestion,['class'=>'form-group has-success']) ?>
   
        
       
        <?php
            echo $this->Form->input('username',['class'=>'form-control']);
            echo $this->Form->input('last_name',['class'=>'form-control']);
            echo $this->Form->input('email',['class'=>'form-control']);
            echo $this->Form->input('phone',['class'=>'form-control']);
            echo $this->Form->input('suggestion',['class'=>'form-control']);
        ?>
        
   <br>
   <center> <?= $this->Form->button(__('Cambiar'),['class'=>'btn btn-primary']) ?> </center>
    <?= $this->Form->end() ?>
</div>
<br>
<br>