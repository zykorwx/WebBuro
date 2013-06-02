<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang=<?php echo Yii::app()->language; ?> lang=<?php echo Yii::app()->language; ?>>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo CHtml::encode(Yii::app()->name); ?></title>

        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" type="text/css" media="screen, projection" />
		
        <!-- <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" type="text/css" media="screen, projection" /> -->
        <!--[if IE 6]><link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.ie6.css" type="text/css" media="screen" /><![endif]-->
        <!--[if IE 7]><link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.ie7.css" type="text/css" media="screen" /><![endif]-->


    </head>

    <body>
	
		<div id="art-page-background-glare-wrapper">
			<div id="art-page-background-glare"></div>
		</div>
		
        <div id="art-main">
                <div class="cleared reset-box"></div>
					<div class="art-bar art-nav">
						<div class="art-nav-outer">
							<div class="art-nav-wrapper">
								<div class="art-nav-inner">
									<?php
										$this->widget('application.components.ArtMenu', array(
											'cls' => 'art-hmenu',
											'prelinklabel' => '<span class="l"></span><span class="r"></span><span class="t">',
											'postlinklabel' => '</span>',
											'items' => array(
												array('label' => 'Inicio', 'url' => array('/site/index'),'visible' => Yii::app()->user->isGuest),
												array('label' => 'Alumnos y profesores', 'url' => array('/site/alumnosIndex'), 'visible' => !Yii::app()->user->isGuest),
												array('label' => 'Acerca de ', 'url' => array('/site/page', 'view' => 'about')),
												array('label' => 'Contacto', 'url' => array('/site/contact')),
												array('label' => 'Usuarios', 'url' => array('/user/index'),'visible' => Yii::app()->user->name === 'admin'),
												array('label' => 'Iniciar sesion', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
												array('label' => 'Cerrar sesion (' . Yii::app()->user->name . ')', 'url' => '#','linkOptions'=>array('submit'=>array('/site/logout'),'confirm'=>'Estas seguro de cerrar tu sesion?'),'visible' => !Yii::app()->user->isGuest),
											),
										)); 
									?>
								</div>
							</div>
						</div>
					</div>
            <div class="cleared reset-box"></div>
			
            <div class="art-header">
                <div class="art-header-position">
                <div class="art-header-wrapper">
					<div class="cleared reset-box"></div>
                    <div class="art-header-inner">
                        <div class="art-headerobject"></div>
                        <div class="art-logo">
                            <h1 class="art-logo-name"><a href="#"><?php echo isset(Yii::app()->params['art-logo-name']) ? Yii::app()->params['art-logo-name'] : Yii::app()->name; ?></a></h1>
                            <h2 class="art-logo-text"><?php echo Yii::app()->params['art-logo-text']; ?></h2>
                        </div>
                    </div>
                </div>
				</div>
			</div>
            <div class="cleared reset-box"></div>
			
			<div class="art-box art-sheet">
				<div class="art-box-body art-sheet-body">
					<div class="art-layout-wrapper">
						<div class="art-content-layout">
							<div class="art-content-layout-row">
								<!-- removed sidebar HTML and set aside -->
								<!-- goes before ..."art-layout-cell art-content" in page.html original -->
								<!-- Main content goes here -->
								<?php echo $content; ?>
							</div>
							<div class="cleared"></div>
						</div> <div class="cleared"></div>
							
						<div class="art-footer">
							<div class="art-footer-body">
								<div class="art-footer-text">
									
									<br />
									
									<p style="text-align: right;"><a href="#"><img width="32" height="32" alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/rss_32-2.png" style="margin-right:10px;" /></a><a href="#"><img width="32" height="32" alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/twitter_32-2.png" style="margin-right: 10px; cursor: text;" /></a><a href="#"><img width="32" height="32" alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/facebook_32-2.png" /></a></p><br />
									<br />
									<p style="text-align: right;">Copyright © 2012 All Rights Reserved.</p>
									<p style="text-align:right;">Fundación Maria Guadalupe</p>
								</div> <div class="cleared"></div>
							</div>
						</div> <div class="cleared"></div>
                    </div>
				</div>
			</div> <div class="cleared"></div>
			<p class="art-page-footer">powered by <a href="http://www.viewor.com.mx" target="_blank">Viewor</a> </p>
			<div class="cleared"></div>
		</div>
    </body>
</html>
