<?php

class HomeController extends Controller
{
	public function actionIndex()
	{
               // $this->layout = '//layouts/main';
                
		$criterio = new CDbCriteria();
		$criterio -> condition = 'category = 11 ';
		$criterio -> order = "category asc";
		$imagenesCasos = Files::model()->findAll($criterio);
                
                $criterio = new CDbCriteria();
		$criterio -> condition = 'category = 12 ';
		$criterio -> order = "category asc";
		$imagenesDescargas = Files::model()->findAll($criterio);
		
		$criterio = new CDbCriteria();
		$criterio -> condition = 'category = 11 and active = 1 and language = \''.Yii::app()->language.'\'';
		$criterio -> order = "category ASC";
		$casos = Texts::model()->findAll($criterio);
                
                $criterio = new CDbCriteria();
		$criterio -> condition = 'category = 12 and active = 1 and language = \''.Yii::app()->language.'\'';
		$criterio -> order = "category ASC";
		$descargas = Texts::model()->findAll($criterio);
                
                $criterio = new CDbCriteria();
		$criterio -> condition = 'category = 13 and active = 1 and language = \''.Yii::app()->language.'\'';
		$criterio -> order = "category ASC";
		$destacados = Texts::model()->findAll($criterio);
                
                $sql = "SELECT 
                            Product.id, Product.name, ProductImage.path
                        FROM
                            products Product
                        INNER JOIN
                            products_images ProductImage ON (ProductImage.product = Product.id )

                        WHERE Product.featured_product = '1' AND ProductImage.category = '2' AND ProductImage.language = 'en'";
                $featured_product = Yii::app()->db->createCommand($sql)->queryAll();
		
                    $condition = "active = 1 and language = '".Yii::app()->language."' order by orden asc";
		$imagenesSlider = Banners::model()->findAll($condition);
		
		$this->render('index',array('imagenesCasos'=>$imagenesCasos,'imagenesDescargas'=>$imagenesDescargas,'casos'=>$casos,"descargas"=>$descargas,'destacados'=>$destacados,'imagenesSlider' => $imagenesSlider,'featured_product'=>$featured_product));
		
	}

public function actionIndex_prueba()
	{
                $this->layout = '//layouts/main';
                
		$criterio = new CDbCriteria();
		$criterio -> condition = 'category = 11 ';
		$criterio -> order = "category asc";
		$imagenesCasos = Files::model()->findAll($criterio);
                
                $criterio = new CDbCriteria();
		$criterio -> condition = 'category = 12 ';
		$criterio -> order = "category asc";
		$imagenesDescargas = Files::model()->findAll($criterio);
		
		$criterio = new CDbCriteria();
		$criterio -> condition = 'category = 11 and active = 1 and language = \''.Yii::app()->language.'\'';
		$criterio -> order = "category ASC";
		$casos = Texts::model()->findAll($criterio);
                
                $criterio = new CDbCriteria();
		$criterio -> condition = 'category = 12 and active = 1 and language = \''.Yii::app()->language.'\'';
		$criterio -> order = "category ASC";
		$descargas = Texts::model()->findAll($criterio);
                
                $criterio = new CDbCriteria();
		$criterio -> condition = 'category = 13 and active = 1 and language = \''.Yii::app()->language.'\'';
		$criterio -> order = "category ASC";
		$destacados = Texts::model()->findAll($criterio);
                
                $sql = "SELECT 
                            Product.id, Product.name, ProductImage.path
                        FROM
                            products Product
                        INNER JOIN
                            products_images ProductImage ON (ProductImage.product = Product.id )

                        WHERE Product.featured_product = '1' AND ProductImage.category = '2' AND ProductImage.language = 'en'";
                $featured_product = Yii::app()->db->createCommand($sql)->queryAll();
		
                    $condition = "active = 1 and language = '".Yii::app()->language."' order by orden asc";
		$imagenesSlider = Banners::model()->findAll($condition);
		
		$this->render('index_prueba',array('imagenesCasos'=>$imagenesCasos,'imagenesDescargas'=>$imagenesDescargas,'casos'=>$casos,"descargas"=>$descargas,'destacados'=>$destacados,'imagenesSlider' => $imagenesSlider,'featured_product'=>$featured_product));
		
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
