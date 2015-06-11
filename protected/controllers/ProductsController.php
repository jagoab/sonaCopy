<?php

class ProductsController extends Controller
{

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * 
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array (array ('allow', // allow all users to perform 'index' and 'view' actions
'actions' => array ('index','InfoProducto','aplication', 'index_new' ),'users' => array ('*' ) ),array ('allow', // allow authenticated user to perform 'create' and 'update' actions
'actions' => array ('create','update' ),'users' => array ('@' ) ),array ('allow', // allow admin user to perform 'admin' and 'delete' actions
'actions' => array ('admin','delete' ),'users' => array ('admin' ) ),array ('deny', // deny all users
'users' => array ('*' ) ) );
	}

	public function actionAplication()
	{
		
		/* textos de las pestañas */
		$sql1 = "SELECT * FROM aplication_type AplicationType WHERE AplicationType.visible = 1";
		$SqlAplicationTypes = Yii::app()->db->createCommand($sql1)->queryAll();
		
		/* texto de cada pestaña */
		$sql2 = "SELECT * FROM products_applications_texts ProductAplicationText INNER JOIN aplication_type AplicationType ON (ProductAplicationText.id = AplicationType.id) WHERE ProductAplicationText.language = '" . Yii::app()->language . "'";
		$SqlAplicationTexts = Yii::app()->db->createCommand($sql2)->queryAll();
		
		/* mostrar todos los productos por aplicacion */
		$sql3 = "SELECT AplicationType.id Aplication_id, AplicationType.name aplicacion, Product.name, ProductImage.path,ProductImage.id id_image, Product.id id_producto, AplicationType.id application_type_id 
                    FROM products_product_applications ProductAplication 

                    INNER JOIN products Product ON(ProductAplication.product_id = Product.id) 

                    INNER JOIN products_images ProductImage ON(Product.id = ProductImage.product)

                    INNER JOIN aplication_type AplicationType ON (ProductAplication.application_type_id = AplicationType.id )

                    WHERE  ProductImage.language = '" . Yii::app()->language . "' AND ProductImage.category = 0 AND  ProductAplication.active = 1 ";
		
		$SqlProductosPorAplicaciones = Yii::app()->db->createCommand($sql3)->queryAll();
		
		/* muestra las imagenes por cada aplicacion en las pestañas* */
		$sql4 = "SELECT * FROM application_images ApplicationImage WHERE ApplicationImage.active = 1  ";
		$SqlApplicationImages = Yii::app()->db->createCommand($sql4)->queryAll();
		
		$this->render('aplication', array ('SqlAplicationTypes' => $SqlAplicationTypes,'SqlAplicationTexts' => $SqlAplicationTexts,'SqlProductosPorAplicaciones' => $SqlProductosPorAplicaciones,'SqlApplicationImages' => $SqlApplicationImages ));
	}

	public function actionIndex()
	{
		$idclick = null;
		if (isset($_GET['idclick'])) $idclick = $_GET['idclick'];
		/* id click es para cuando sea llamado el producto destacado */
		if (Yii::app()->language == 'ch')
		{
			
			$idioma = 'en';
		}
		else
		{
			$idioma = Yii::app()->language;
		}
		// BLOQUE PARA LA CARGA DE EL TEXTO DE CATEGORIAS SEGUN SU VISIBILIDAD
		$criterio = new CDbCriteria();
		$criterio->order = "score asc";
		$criterio->condition = "visible = 1";
		
		$productType = ProductsTypes::model()->findAll($criterio);
		$i = 0;
		$text = array ();
		$j = 1;
		$pestanaActiva = 1;
		
		foreach ($productType as $types)
		{
			
			// BLOQUE PARA LA CARGA DE EL TEXTO DE CATEGORIAS SEGUN SU VISIBILIDAD
			$criterio = new CDbCriteria();
			$criterio->order = "score asc";
			$criterio->condition = "t.visible = 1 and productsTypesTexts.name='descripcion' and productsTypesTexts.language = '" . $idioma . "'";
			
			$productType = ProductsTypes::model()->with('productsTypesTexts')->findAll($criterio);
			// var_dump($productType);
			$i = 0;
			$text = array ();
			$j = 1;
			$pestanaActiva = 1;
			
			$sqlimg = "SELECT distinct ptype.id type_id, pc.country_id, Product.name, ProductImage.path,ProductImage.id id_image, Product.id id_producto
                    FROM products Product
                    INNER JOIN products_images ProductImage ON(Product.id = ProductImage.product)
                    INNER JOIN products_products_type  pptype on (Product.id=pptype.product)
                    INNER JOIN products_types  ptype on (pptype.product_type=ptype.id)
                    left JOIN products_countries pc on (Product.id=pc.product_id) 
                    WHERE  ProductImage.language = 'en'  and active=1 AND ProductImage.category =0 and 
                    (pc.country_id='" . Yii::app()->session['flag'] . "' or pc.country_id is null ) order by Product.score asc ";
			
			$Sqlimages = Yii::app()->db->createCommand($sqlimg)->queryAll();
		}
		$this->render('index', array ('pt' => $productType,'imgs' => $Sqlimages,'idclick' => $idclick ));
		
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
	
	public function actionIndex_New()
	{
		$idclick = null;
		if (isset($_GET['idclick'])) $idclick = $_GET['idclick'];
		/* id click es para cuando sea llamado el producto destacado */
		if (Yii::app()->language == 'ch')
		{
				
			$idioma = 'en';
		}
		else
		{
			$idioma = Yii::app()->language;
		}
		// BLOQUE PARA LA CARGA DE EL TEXTO DE CATEGORIAS SEGUN SU VISIBILIDAD
		$criterio = new CDbCriteria();
		$criterio->order = "score asc";
		$criterio->condition = "visible = 1";
	
		$productType = ProductsTypes::model()->findAll($criterio);
		$i = 0;
		$text = array ();
		$j = 1;
		$pestanaActiva = 1;
	
		foreach ($productType as $types)
		{
				
			// BLOQUE PARA LA CARGA DE EL TEXTO DE CATEGORIAS SEGUN SU VISIBILIDAD
			$criterio = new CDbCriteria();
			$criterio->order = "score asc";
			$criterio->condition = "t.visible = 1 and productsTypesTexts.name='descripcion' and productsTypesTexts.language = '" . $idioma . "'";
				
			$productType = ProductsTypes::model()->with('productsTypesTexts')->findAll($criterio);
			// var_dump($productType);
			$i = 0;
			$text = array ();
			$j = 1;
			$pestanaActiva = 1;
				
			$sqlimg = "SELECT distinct ptype.id type_id, pc.country_id, Product.name, ProductImage.path,ProductImage.id id_image, Product.id id_producto
                    FROM products Product
                    INNER JOIN products_images ProductImage ON(Product.id = ProductImage.product)
                    INNER JOIN products_products_type  pptype on (Product.id=pptype.product)
                    INNER JOIN products_types  ptype on (pptype.product_type=ptype.id)
                    left JOIN products_countries pc on (Product.id=pc.product_id)
                    WHERE  ProductImage.language = 'en'  and active=1 AND ProductImage.category =0 and
                    (pc.country_id='" . Yii::app()->session['flag'] . "' or pc.country_id is null ) order by Product.score asc ";
				
			$Sqlimages = Yii::app()->db->createCommand($sqlimg)->queryAll();
		}
		$this->render('index_new', array ('pt' => $productType,'imgs' => $Sqlimages,'idclick' => $idclick ));
	
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
	
	// METODO ENCARGADO DE LA INTERACCION AJAAX CON EL DETALLE DE PRODUCTOS SONARAY
	public function actionInfoProducto()
	{
		$imagenDetalle = array ();
		
		// $_POST['idProducto']=(!isset($_POST['idProducto']))?14:$_POST['idProducto'];
		
		if (isset($_POST['idProducto']) && isset($_POST['idIdioma']))
		{
			// var_dump($_POST['idIdioma']);
			if ($_POST['idIdioma'] == 'ch')
			{
				
				$_POST['idIdioma'] = 'en';
			}
			
			$condition = "product=" . $_POST['idProducto'] . " and category = 2 and language = '" . $_POST['idIdioma'] . "' ";
			$imagenDetalle['imagenMediana'] = ProductsImages::model()->findAll(array ('condition' => $condition ));
			$condition = "product=" . $_POST['idProducto'] . " and category = 3 and language = '" . $_POST['idIdioma'] . "'";
			
			$imagenDetalle['imagenPequena'] = ProductsImages::model()->findAll(array ('condition' => $condition ));
			
			$condition = "product=" . $_POST['idProducto'] . " and visible=1 and language='" . $_POST['idIdioma'] . "' and category=7";
			$imagenDetalle['descripcion'] = ProductsTexts::model()->findAll(array ('condition' => $condition ));
			
			$condition = "product=" . $_POST['idProducto'] . " and visible=1 and language='" . $_POST['idIdioma'] . "' and category in (4,5,6,8) order by category asc";
			$imagenDetalle['pestanasDetalles'] = ProductsTexts::model()->findAll(array ('condition' => $condition ));
			
			$condition = "product=" . $_POST['idProducto'] . " and language='" . $_POST['idIdioma'] . "' and category in (4,5,6,8) order by category asc";
			$imagenDetalle['imagenesDetalles'] = ProductsImages::model()->findAll(array ('condition' => $condition ));
			// $condition = "product=".$_POST['idProducto']." and visible=1 and language='es' and category=7";
			// $imagenDetalle['pestanasDetalles'][1] = ProductsTexts::model()->findAll(array('condition'=>$condition));
			
			foreach ($imagenDetalle['pestanasDetalles'] as $valor)
			{
				
				if ($valor->category == 8)
				{
					$condition = 'product = ' . $valor->product . ' and (file_type = 1 or file_type = 3)';
					$productosDescargas = ProductFiles::model()->findAll(array ('condition' => $condition ));
					$i = 0;
					$a = 0;
					if (count($productosDescargas) > 0)
					{
						foreach ($productosDescargas as $files)
						{
							
							$sql = "SELECT t.*,p.description FROM files t
									left join files_types p ON t.pathTypeFile = p.id
									where t.id=" . $files->file . " and (t.language = '" . $_POST['idIdioma'] . "' || t.pathTypeFile=3 )";
							$connection = Yii::app()->db;
							$command = $connection->createCommand($sql);
							// $rowCount=$command->execute(); // execute the non-query SQL
							$pathDescargas = $command->queryAll(); // execute a query SQL
							
							/*
							 * $criterio1 = new CDbCriteria();
							 * $criterio1->select = "t.*";
							 * //$criterio1->join = "left join files_types p ON t.pathTypeFile = p.id";
							 * $criterio1->condition = "t.id=".$files->file." and t.active = 1 and t.language = '".$_POST['idIdioma']."'";
							 * $pathDescargas = FilesSonaray::model()->findAll($criterio1);
							 */
							// $condition = 'id='.$files->file.' and active = 1 and language = "'.Yii::app()->language.'"';
							// $pathDescargas[$i] = FilesSonaray::model()->find(array('condition' => $condition));
							// $prueba = $pathDescargas[$i]->description;
							$i++ ;
							
							if (count($pathDescargas) > 0)
							{
								
								foreach ($pathDescargas as $descargas)
								{
									
									$imagenDetalle['pathDescargas'][$a] = $descargas;
									
									$a++ ;
								}
							}
							else
							{
								if ($imagenDetalle['pathDescargas'] == '' || $imagenDetalle['pathDescargas'] == NULL) $imagenDetalle['pathDescargas'] = '';
							}
						}
					}
					else
					{
						$imagenDetalle['pathDescargas'] = '';
						// si no tiene productos relacionados
					}
				}
			}
			
			if ($valor->category == 9)
			{
				$condition = 'product = ' . $valor->product . ' and file_type = 2';
				$productosDescargas = ProductFiles::model()->findAll(array ('condition' => $condition ));
				$i = 0;
				
				foreach ($productosDescargas as $files)
				{
					// $criterio1 = new CDbCriteria();
					// $criterio1->select = "t.*,p.*";
					// $criterio1->join = "left join files_types p ON t.id = p.id";
					// $criterio1->condition = "t.id=".$files->file." and t.active = 1 and t.language = 'es'";
					// $pathDescargas = Files::model()->findAll($criterio1);
					$condition = 'id=' . $files->file . ' and active = 1 and language = "' . Yii::app()->language . '"';
					$pathVideos[$i] = Files::model()->find(array ('condition' => $condition ));
					$i++ ;
				}
				$a = 0;
				
				foreach ($pathVideos as $videos)
				{
					$imagenDetalle['pathVideos'][$a] = $videos;
					$a++ ;
				}
			}
			
			$condition = "id=" . $_POST['idProducto'] . " and active=1";
			$imagenDetalle['nombreProducto'] = Products::model()->find(array ('condition' => $condition ));
		}
		
		$imagenDetalle['rutaBase'] = Yii::app()->baseUrl;
		
		print CJSON::encode($imagenDetalle);
	}
}
