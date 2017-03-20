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

<center><h1 id="titulotabla">TABLA DE SUGERENCIAS</h1></center>
<br>
    <h2 id="titulosugerencia">Sugerencia del Usuario:</h2>
   <center><h1 id="titulosugerenciau"><?= h($suggestion->username) ?></h1></center>
   <br>
    <div class="table-responsive">
   <table class="table table-condensed">
        <tr <tr class="warning">
            <th>Username</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Id</th>
            <th>Created</th>
            <th>Modified</th>
            
        </tr>
        <tr class="success">
            <td><?= h($suggestion->username) ?></td>
            <td><?= h($suggestion->last_name) ?></td>
            <td><?= h($suggestion->email) ?></td>
            <td><?= h($suggestion->phone) ?></td>
            <td><?= $this->Number->format($suggestion->id) ?></td>
            <td><?= h($suggestion->created) ?></td>
            <td><?= h($suggestion->modified) ?></td>
        </tr>
        
    </table>
</div>
<br>
    <center><h4 id="titulosugerencia">SUGERENCIA:</h4></center>
    <div class="row" id="sugerencia2">
        
        <center><h3><?= $this->Text->autoParagraph(h($suggestion->suggestion)); ?></h3></center>
    </div>
<br>
<br>
<br>
<br>
