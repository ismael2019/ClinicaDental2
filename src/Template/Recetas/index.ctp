<div class="container">
            
            <div class="main">
                <ul id="cbp-bislideshow" class="cbp-bislideshow">
                    <li><img src="./webroot/img/1.jpg" alt="image01"/></li>
                    <li><img src="./webroot/img/3.jpg" alt="image02"/></li>
                    <li><img src="./webroot/img/7.jpg" alt="image03"/></li>
                    <li><img src="./webroot/img/11.jpg" alt="image04"/></li>
                </ul>
                
            </div>
</div>

<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <?= $this->Html->image('logooficialpng.png',['class'=>'img-responsive'])?>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><?= $this->Html->link('volver',['controller'=>'pacientes','action'=>'index'])?></li>
        </ul>
        </div><!--/.nav-collapse -->
      </div>
      <div class="clearfix"> </div>
    </div>
 <!-- script-for-menu -->
                             <script>
                               $( "span.menu" ).click(function() {
                                 $( "ul.nav1" ).slideToggle( 300, function() {
                                 // Animation complete.
                                  });
                                 });
                            </script>
     <br>                 
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
<center><h1 id="titulotabla">LISTA DE TRATAMIENTOS</h1></center>
<br>
<br>
<br>
<br>

<div class="table-responsive">
    <table class="table table-condensed">
       
            <tr class="warning">
                <th>id</th>
                <th>paciente_id</th>
                <th>created</th>
                <th>modified</th>
                <th>Actions</th>
            </tr>
        
            <?php foreach ($recetas as $receta): ?>
           <tr class="success">
                <td><?= $this->Number->format($receta->id) ?></td>
                <td><?= $receta->has('paciente') ? $this->Html->link($receta->paciente->id, ['controller' => 'Pacientes', 'action' => 'view', $receta->paciente->id]) : '' ?></td>
                <td><?= h($receta->created) ?></td>
                <td><?= h($receta->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $receta->id],['class'=>'btn btn-info']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $receta->id],['class'=>'btn btn-success']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $receta->id],['class'=>'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $receta->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        
    </table>
    <div class="paginator">
      <center>  <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous'),['class'=>'btn btn-info']) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >',['class'=>'btn btn-info']) ?>
        </ul> </center>
       <center> <p><?= $this->Paginator->counter() ?></p> </center>
    </div>
</div>
