<?php

class AboutController extends Controller
{
         
	public function actionIndex()
	{
            
            
		$criterio = new CDbCriteria();
		$criterio -> condition = 'language = \''.Yii::app()->language.'\' and category = 17';
		
		$textos = Texts::model()->findAll($criterio);
		
		$criterio = new CDbCriteria();
		$criterio -> condition = 'language = \''.Yii::app()->language.'\' and category = 17 order by name asc';
		
		$imagenesAboutUs = Files::model()->findAll($criterio);
		
	
		$this->render('index',array(
				'textos'=>$textos,
				'imagenesAboutUs'=>$imagenesAboutUs,
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