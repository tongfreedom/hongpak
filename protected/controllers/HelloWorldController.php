<?php

class HelloWorldController extends Controller
{
	public function actionSayHello($firstname=null, $lastname=null)
	{
		echo "Hello ".$firstname." ".$lastname;
		//$this->render('SayHello');
	}
	public function actionCal($x, $y)
	{
		$this->render('Cal',array(
			'x' => $x,
			'y' => $y
		));
	}
}

?>