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
<br>
 <?php
            if ($current_user['role'] == 'dentista')
        {
        ?>
<section>
	<div class="jumbotron">
  		<div class="container" id="contenidoinicio">
    		<center><h1>Bienvenido Dentista</h1></center>
    	<div class="container">
            <div class="row">
                <center><h2>RECORDATORIO</h2></center>
                <h4>Recuerde Siempre revisar las sugerencias que los usuarios le mandan.</h4>
                <br>
                
                <h4>
                	Con este Sistema Puede Registrar Pacientes, Con el Respectivo tratamiento y sus respectivos precios tambien podra buscar a los pacientes ya sea por su nombre, apellido, Carnet de Identidad, Telefono para agilizar la atencion del paciente si anteriormente fue registrado. 
                </h4>
                
            </div>
        </div>


  			</div>
		</div>
	 <?php } ?>

</section>
<?php
            if ($current_user['role'] == 'protesista')
        {
        ?>
<section>
	<div class="jumbotron">
  		<div class="container" id="contenidoinicio">
    		<center><h1>Bienvenido Protesista</h1></center>
    	<div class="container">
            <div class="row">
                <center><h2>Explicacion</h2></center>
                
                <br>
                
                <h4>
                	Con este Sistema podra realizar sus trabajos que el Dentista le destine, tambien podra buscar al paciente mediante su nombre, apellido, Cedula de Identidad, correo, telefono para agilizar su atencion al paciente, tambien cuando concluya con su trabajo debera notificar al dentista que el trabajo esta concluido.
                	<br>
                	<br>

                </h4>
                
            </div>
        </div>


  			</div>
		</div>
	

</section>
<?php } ?>
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

<?= $this->Html->script(['jquery','bootstrap.min'])?>