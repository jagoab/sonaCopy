<?php

class WheretobuyController  extends Controller
{
	public function actionIndex()
	{
		
		$criterio = new CDbCriteria();
		for($i = 1;$i <=4;$i++){
		$criterio -> condition = 'language = \''.Yii::app()->language.'\' and category in (42) and parent = '.$i;
		$textos = Texts::model()->findAll($criterio);
					
				$parrafo[$i] = $textos;
		}
		
		
		
		$this->render('index',array(
				'parrafos'=>$parrafo
		));
		
		
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}