<?php 
class SaludoController extends Controller{
	public function actionIndex(){
		$saludo = 'Hola que tal como estas?';
		$this->render('index',array('saludo' => $saludo));
	}
}
?>