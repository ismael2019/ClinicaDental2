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
                <th>tratamiento_id</th>
                <th>costo_total</th>
                <th>cancelado</th>
                <th>saldo_por_pagar</th>
                <th>created</th>
                <th>modified</th>
                <th>Actions</th>
            </tr>
        
            <?php foreach ($cuentas as $cuenta): ?>
            <tr class="warning">
                <td><?= $this->Number->format($cuenta->id) ?></td>
                <td><?= $cuenta->has('tratamiento') ? $this->Html->link($cuenta->tratamiento->id, ['controller' => 'Tratamientos', 'action' => 'view', $cuenta->tratamiento->id]) : '' ?></td>
                <td><?= $this->Number->format($cuenta->costo_total) ?></td>
                <td><?= $this->Number->format($cuenta->cancelado) ?></td>
                <td><?= $this->Number->format($cuenta->saldo_por_pagar) ?></td>
                <td><?= h($cuenta->created) ?></td>
                <td><?= h($cuenta->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cuenta->id],['class'=>'btn btn-info']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cuenta->id],['class'=>'btn btn-success']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cuenta->id],['class'=>'btn btn-danger'],['confirm' => __('Are you sure you want to delete # {0}?', $cuenta->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
 <div class="paginator">
    <center>    <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul> </center>
      <center>  <p><?= $this->Paginator->counter() ?></p></center>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>