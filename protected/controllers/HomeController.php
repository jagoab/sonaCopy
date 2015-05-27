<?php

class HomeController extends Controller
{

	public function actionIndex()
	{
		$this->layout = '//layouts/main';
		$sql = "SELECT * FROM mainmenu Mainmenu WHERE Mainmenu.active = 1 AND Mainmenu.language =  '" . Yii::app()->language . "' ORDER BY Mainmenu.weight ASC";
		$menus = Yii::app()->db->createCommand($sql)->queryAll();
		// $this->layout = '//layouts/main';
		$criterio = new CDbCriteria();
		$criterio->condition = 'category = 11 ';
		$criterio->order = "category asc";
		$imagenesCasos = Files::model()->findAll($criterio);
		$criterio = new CDbCriteria();
		$criterio->condition = 'category = 12 ';
		$criterio->order = "category asc";
		$imagenesDescargas = Files::model()->findAll($criterio);
		$criterio = new CDbCriteria();
		$criterio->condition = 'category = 11 and active = 1 and language = \'' . Yii::app()->language . '\'';
		$criterio->order = "category ASC";
		$casos = Texts::model()->findAll($criterio);
		$criterio = new CDbCriteria();
		$criterio->condition = 'category = 12 and active = 1 and language = \'' . Yii::app()->language . '\'';
		$criterio->order = "category ASC";
		$descargas = Texts::model()->findAll($criterio);
		$criterio = new CDbCriteria();
		$criterio->condition = 'category = 13 and active = 1 and language = \'' . Yii::app()->language . '\'';
		$criterio->order = "category ASC";
		$destacados = Texts::model()->findAll($criterio);
		// Consulta los productos destacados
		$sql = "SELECT Product.id, Product.name productName, ProductImage.path, ProductsTexts.text, ProductsTexts.name, ProductsType.product_type categoria FROM products Product INNER JOIN products_images ProductImage ON (ProductImage.product = Product.id ) INNER JOIN products_texts ProductsTexts ON (ProductsTexts.product = Product.id) INNER JOIN products_products_type ProductsType ON (ProductsType.product = Product.id) WHERE Product.featured_product = '1' AND ProductImage.category = '2' AND ProductImage.language = '" . Yii::app()->language . "' AND ProductsTexts.name = 'Description' AND ProductsTexts.language = '" . Yii::app()->language . "' ORDER BY score DESC;";
		$featured_product = Yii::app()->db->createCommand($sql)->queryAll();
		// Consulta las imagenes del slider
		$condition = "active = 1 and language = '" . Yii::app()->language . "' order by orden asc";
		$imagenesSlider = Banners::model()->findAll($condition);
		// Consulta para traer texto de about us
		$criterioAbout = new CDbCriteria();
		$criterioAbout->condition = 'language = \'' . Yii::app()->language . '\' and category = 17';
		$textoAbout = Texts::model()->findAll($criterioAbout);
		//Cosulta Casos de estudio
		$sql1 = "SELECT * FROM casestudies CaseStudies WHERE CaseStudies.active = 1 and language='" . Yii::app()->language . "' ORDER BY CaseStudies.order ASC ";
		$caseStudies= Yii::app()->db->createCommand($sql1)->queryAll();
                //Cosulta  de noticias
                $sql2 = "SELECT * FROM news News WHERE language='" . Yii::app()->language . "' ORDER BY News.order ASC ";
                
                $News= Yii::app()->db->createCommand($sql2)->queryAll();
		$this->render('index', array ('imagenesCasos' => $imagenesCasos,'imagenesDescargas' => $imagenesDescargas,'casos' => $casos,"descargas" => $descargas,'destacados' => $destacados,'imagenesSlider' => $imagenesSlider,'featured_product' => $featured_product,'textoAbout' => $textoAbout,'menus' => $menus, 'caseStudies' => $caseStudies, 'News' => $News ));
	}

	public function actionIndex_prueba()
	{
		$this->layout = '//layouts/main';
		
		$criterio = new CDbCriteria();
		$criterio->condition = 'category = 11 ';
		$criterio->order = "category asc";
		$imagenesCasos = Files::model()->findAll($criterio);
		
		$criterio = new CDbCriteria();
		$criterio->condition = 'category = 12 ';
		$criterio->order = "category asc";
		$imagenesDescargas = Files::model()->findAll($criterio);
		
		$criterio = new CDbCriteria();
		$criterio->condition = 'category = 11 and active = 1 and language = \'' . Yii::app()->language . '\'';
		$criterio->order = "category ASC";
		$casos = Texts::model()->findAll($criterio);
		
		$criterio = new CDbCriteria();
		$criterio->condition = 'category = 12 and active = 1 and language = \'' . Yii::app()->language . '\'';
		$criterio->order = "category ASC";
		$descargas = Texts::model()->findAll($criterio);
		
		$criterio = new CDbCriteria();
		$criterio->condition = 'category = 13 and active = 1 and language = \'' . Yii::app()->language . '\'';
		$criterio->order = "category ASC";
		$destacados = Texts::model()->findAll($criterio);
		
		$sql = "SELECT 
                            Product.id, Product.name, ProductImage.path
                        FROM
                            products Product
                        INNER JOIN
                            products_images ProductImage ON (ProductImage.product = Product.id )

                        WHERE Product.featured_product = '1' AND ProductImage.category = '2' AND ProductImage.language = 'en'";
		$featured_product = Yii::app()->db->createCommand($sql)->queryAll();
		
		$condition = "active = 1 and language = '" . Yii::app()->language . "' order by orden asc";
		$imagenesSlider = Banners::model()->findAll($condition);
		
		$this->render('index_prueba', array ('imagenesCasos' => $imagenesCasos,'imagenesDescargas' => $imagenesDescargas,'casos' => $casos,"descargas" => $descargas,'destacados' => $destacados,'imagenesSlider' => $imagenesSlider,'featured_product' => $featured_product ));
	}
	
	// Uncomment the following methods and override them if needed
	/*
	 * public function filters()
	 * {
	 * // return the filter configuration for this controller, e.g.:
	 * return array(
	 * 'inlineFilterName',
	 * array(
	 * 'class'=>'path.to.FilterClass',
	 * 'propertyName'=>'propertyValue',
	 * ),
	 * );
	 * }
	 *
	 * public function actions()
	 * {
	 * // return external action classes, e.g.:
	 * return array(
	 * 'action1'=>'path.to.ActionClass',
	 * 'action2'=>array(
	 * 'class'=>'path.to.AnotherActionClass',
	 * 'propertyName'=>'propertyValue',
	 * ),
	 * );
	 * }
	 */
}
