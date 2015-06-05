<?php

	class CalCulatorController extends Controller
	{
		function actionIndex()
		{
			$a=0;
			$b=0;
			$c=0;

			if(!empty($_POST)){

				$a = $_POST['a'];
				$b = $_POST['b']; 
				$c = $a + $b;
			}
			$this->render('index',array(
				'a'=> $a,
				'b'=> $b,
				'c'=> $c
			));
		}
	}

?>	