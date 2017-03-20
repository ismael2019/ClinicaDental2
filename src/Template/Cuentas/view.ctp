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
    <center><h1 id="titulosugerenciau"><?= h($cuenta->id) ?></h1></center>
   <br>
    <div class="table-responsive">
   <table class="table table-condensed">
        <tr <tr class="warning">
            <th>Tratamiento</th>
            <th>Id</th>
            <th>Costo Total</th>
            <th>Cancelado</th>
            <th>Saldo Por Pagar</th>
            <th>Created</th>
            <th>Modified</th>

            
        </tr>
     <tr class="success">
            <td><?= $cuenta->has('tratamiento') ? $this->Html->link($cuenta->tratamiento->id, ['controller' => 'Tratamientos', 'action' => 'view', $cuenta->tratamiento->id]) : '' ?></td>
            <td><?= $this->Number->format($cuenta->id) ?></td>
            <td><?= $this->Number->format($cuenta->costo_total) ?></td>
            <td><?= $this->Number->format($cuenta->cancelado) ?></td>
            <td><?= $this->Number->format($cuenta->saldo_por_pagar) ?></td>
            <td><?= h($cuenta->created) ?></td>
            <td><?= h($cuenta->modified) ?></td>
        </tr>
     
    </table>
</div>
