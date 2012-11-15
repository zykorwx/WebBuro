<?php $this->pageTitle = Yii::app()->name; ?>
<!-- demo content for the Artisteer theme -->

                <div class="art-postcontent">

						<div class="art-content-layout-row">
						
							<div class="mini-menu-0 " style="width: 25%;">
								<p><img width="64" height="64" alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/dir-2.png" style="float:left; margin-right:10px; margin-bottom:20px;" /></p>
								<h4><?php echo CHtml::link('Mis alumnos',array('/alumno/admin'),array('class'=>'boton-mini-menu')) ?></h4>
								<p><span style="color: rgb(255, 255, 255);">Da clic aqui para ir al administrador de tus alumnos.</span></p>
								
							</div>
							
							<div class="mini-menu-1" style="width: 25%;" >
								<p><img width="64" height="64" alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/lupa.png" style="float:left; margin-right:10px; margin-bottom:20px;" /></p>
								<h4><?php echo CHtml::link('Buscador de alumnos',array('/alumno/admin2'),array('class'=>'boton-mini-menu')) ?></h4>
								<p><span style="color: rgb(255, 255, 255);">Da clic para ir al buscador de  alumnos.</span></p>
								<!-- <p style="text-align:center;"><a href="#" class="art-button">More</a></p> -->
							</div>
							
	

						</div>


					<div class="art-content-layout">
						<div class="art-content-layout-row">
							<div class="art-layout-cell layout-item-2" style="width: 25%;">
								<h1>Ultimas noticias</h1>
								<h3>09/11/2012</h3>
								<p>Se lanza segunda beta de la herramienta B:SM </p>
								<hr style="border:none;background-color:#dedede;color:#dedede;height:1px;" />
								<h3>02/11/2012</h3>
								<p>Se lanza la primer beta de la herramienta web llamada:<b> Buro de Solvencia Moral, B:SM</b> </p>
								<hr style="border:none;background-color:#dedede;color:#dedede;height:1px;" />
							</div>
	
							<div class="art-layout-cell layout-item-2" style="width: 50%;">
								<h1>Protegete de alumnos deudores e informa.</h1>
								<p>Evita abusos por padres de familia que usan al sistema escolarizado para no pagar colegiaturas y retirar papeles de las instituciones particulares.</p>
								<p><img width="449" height="218" alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/bizkit_img-2-2.jpg" /></p>								
								<p>Si algun alumno presenta algun adeudo y no lo cubriera, reportalo ingresandolo en esta plataforma, para que otras instituciones tomen la decision de aceptar o no ha dicho alumno.</p>
								
								<p>Cada institucion que contrate dicho servicio contara con asistencia legal de urgencia para cada uno de sus maestros inscritos en dicha institucion, esto como complemento y para proteger los intereses de un sector muy desprotegido que es el de ser maestro.</p>
								<p><?php 
								if (Yii::app()->user->isGuest)
									echo 'Comienza a protegerte ahora '. CHtml::link('registrate',array('/user/create'),array('class'=>'boton-link')).' o '. CHtml::link('Inicia sesion',array('/site/login'),array('class'=>'boton-link')).'.';
									
								 ?></p>
							</div>
	

						</div>
					</div>
				</div>
                <div class="cleared"></div>