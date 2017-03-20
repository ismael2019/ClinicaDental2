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
<center><h1 id="titulotabla">TABLA DE SUGERENCIAS</h1></center>
<br>
<br>
<br>
<br>

<div class="table-responsive">
    <table class="table table-condensed">
       
            <tr class="warning">
                <th>ID</th>
                <th>USERNAME</th>
                <th>LAST_NAME</th>
                <th>EMAIL</th>
                <th>PHONE</th>
                <th>CREATED</th>
                <th>MODIFIED</th>
                <th>ACTIONS</th>
            </tr>
        
        
            <?php foreach ($suggestions as $suggestion): ?>
            <tr class="success">
                <td><?= $this->Number->format($suggestion->id) ?></td>
                <td><?= h($suggestion->username) ?></td>
                <td><?= h($suggestion->last_name) ?></td>
                <td><?= h($suggestion->email) ?></td>
                <td><?= h($suggestion->phone) ?></td>
                <td><?= h($suggestion->created) ?></td>
                <td><?= h($suggestion->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $suggestion->id],['class'=>'btn btn-info']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $suggestion->id],['class'=>'btn btn-success']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $suggestion->id],['class'=>'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $suggestion->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
       
    </table>
</div>
    <div class="paginator">
      <center>  <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous'),['class'=>'btn btn-info']) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >',['class'=>'btn btn-info']) ?>
        </ul> </center>
       <center> <p><?= $this->Paginator->counter() ?></p> </center>
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

