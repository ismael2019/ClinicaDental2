
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
            <li><?= $this->Html->link('1.AgregarPaciente',['controller'=>'pacientes','action'=>'add'])?></li>
            <li><?= $this->Html->link('2.AgregarHistorialMedico',['controller'=>'historiales','action'=>'add'])?></li>
            <li><?= $this->Html->link('3.AgregarTratamientos',['controller'=>'tratamientos','action'=>'add'])?></li>
            <li><?= $this->Html->link('4.CuentaPago',['controller'=>'cuentas','action'=>'add'])?></li>
            <li><?= $this->Html->link('RecetasMedicas',['controller'=>'recetas','action'=>'add'])?></li>
            <li><?= $this->Html->link('ListadePacientes',['controller'=>'pacientes','action'=>'index'])?></li>
            <li><?= $this->Html->link('Inicio',['controller'=>'users','action'=>'inicio'])?></li>
          </ul>
          <center><h1></h1></center>
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
     <br>                   <!-- /script-for-menu -->

<div class="pacientes index large-9 medium-8 columns content">
    <center><h1 id="titulotabla">Lista De Pacientes</h1></center>
    <div class="table-responsive">
    <?= $this->Flash->render() ?>
    <table class="table table-bordered">
            <tr class="warning">
                <th>id</th>
                <th>nombre</th>
                <th>apellido</th>
                <th>sexo</th>
                <th>edad</th>
                <th>ci</th>
                <th>ciudad</th>
                <th>telf_o_cel</th>
                <th>email</th>
                <th>created</th>
                <th>modified</th>
                <th>user_id</th>
                <th>Actions</th>
            </tr>
        
            <?php foreach ($pacientes as $paciente): ?>
            <tr class="success">
                <td><?= $this->Number->format($paciente->id) ?></td>
                <td><?= h($paciente->nombre) ?></td>
                <td><?= h($paciente->apellido) ?></td>
                <td><?= h($paciente->sexo) ?></td>
                <td><?= $this->Number->format($paciente->edad) ?></td>
                <td><?= h($paciente->ci) ?></td>
                <td><?= h($paciente->ciudad) ?></td>
                <td><?= $this->Number->format($paciente->telf_o_cel) ?></td>
                <td><?= h($paciente->email) ?></td>
                <td><?= h($paciente->created) ?></td>
                <td><?= h($paciente->modified) ?></td>
                <td><?= $paciente->has('user') ? $this->Html->link($paciente->user->id, ['controller' => 'Users', 'action' => 'view', $paciente->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $paciente->id],['class'=>'btn btn-info']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $paciente->id],['class'=>'btn btn-success']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $paciente->id],['class'=>'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $paciente->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        
    </table>
    </div>
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