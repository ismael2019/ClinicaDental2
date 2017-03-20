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

<center><h1 id="titulotabla">TABLA DE RECETAS MEDICAS</h1></center>
<br>
    <center><h1 id="titulosugerenciau"><?= h($receta->id) ?></h3></center>
   <br>
    <div class="table-responsive">
   <table class="table table-condensed">
        <tr class="warning">
            <th>Paciente</th>
            <th>Id</th>
            <th>Created</th>
            <th>Modified</th>
        </tr>    
           
        
        <tr <tr class="success">
            <td><?= $receta->has('paciente') ? $this->Html->link($receta->paciente->nombre, ['controller' => 'Pacientes', 'action' => 'view', $receta->paciente->id]) : '' ?></td>
            <td><?= $this->Number->format($receta->id) ?></td>
            <td><?= h($receta->created) ?></td>
            <td><?= h($receta->modified) ?></td>
        </tr>
     
    </table>
    
        <center><h4 id="titulosugerencia">DETALLE DE LA RECETA</h4></center>
        <div class="row" id="sugerencia2">
        
        <center><h3><?= $this->Text->autoParagraph(h($receta->detalle_de_la_receta)); ?></h3></center>
    </div>
<br>
       <br>
<br>
<br>
<br>
    
      

