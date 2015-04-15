<?php

class NewsController extends Controller
{
	 public function actionCases($id) {
             
            $model2 = new News;
            $news= News::model()->findByPk($id);
            $criterio = new CDbCriteria();
            $criterio -> condition = 'language = \''.Yii::app()->language.'\' and category = 34 order by name asc';
            $imagenesAboutUs = Files::model()->findAll($criterio);
     
            $sql = "SELECT * FROM news title";
            
            //$news = Yii::app()->db->createCommand($sql)->queryAll();
            $this->render('cases',array('model'=>$model2,'news'=>$news,
				'imagenesAboutUs'=>$imagenesAboutUs));
    }
        
        public function actionpressReleases()
	{
		$criterio = new CDbCriteria();
		$criterio -> condition = 'language = \''.Yii::app()->language.'\'';
		
		$textos = News::model()->findAll($criterio);
		
		$criterio = new CDbCriteria();
		$criterio -> condition = 'language = \''.Yii::app()->language.'\' and category = 34 order by name asc';
		
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