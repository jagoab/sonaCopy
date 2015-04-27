<?php

class DownloadsController extends Controller
{
	public function actionIndex()
	{
                /*ESTA CONSULTA BUSCA TODOS LOS FILES DONDE CATEGORIA SEA IGUAL A 15 QUE ES BROCHURE o 24 ies*/
                $sql = "SELECT distinct FileType.id,FileType.name    pathTypeFile,File.id fileid,
                    File.name filename,ProductType.name Product_Type,ProductType.id Product_Type_id,File.path,File.pathTypeFile type,
                    File.language FROM files File 
                    INNER JOIN  product_files ProductFile  ON (File.id=ProductFile.file)
                    INNER JOIN products Product ON(ProductFile.product = Product.id)
                    INNER JOIN files_types FileType ON(ProductFile.file_type = FileType.id)

                    INNER JOIN  products_products_type ProductProductType on (ProductFile.product= ProductProductType.product)
                    INNER JOIN  products_types ProductType on (ProductProductType.product_type = ProductType.id)

                    WHERE (File.category = 15 and (File.language ='".Yii::app()->language."' || File.language ='en')) || (File.category = 24 and File.language= 'en') AND File.active = 1 and Product.active=1";
                    //AND File.language = '".Yii::app()->language."'
           
                $Files = Yii::app()->db->createCommand($sql)->queryAll();
                if(Yii::app()->language=='en'){
                    $and="and File.language= '".Yii::app()->language."'";
                }else {
                   $and="and (File.language= '".Yii::app()->language."' or  File.language= 'en')"; 
                }
                $sql2 = "SELECT File.name, File.path, File.language FROM files File INNER JOIN categories Category ON (File.category = Category.code) WHERE Category.name = 'PDFDownload' AND File.active = 1 ".$and;
                $guias = Yii::app()->db->createCommand($sql2)->queryAll();
                
                $sql3 = "SELECT FileType.id, FileType.name FileTypeName FROM files_types FileType where name !='PDF' and name !='IMAGEN' ";
                $tipoArchivos = Yii::app()->db->createCommand($sql3)->queryAll();
               // muestra los tipos de productos y los productos para seleccionar
                 
                
           
                $filtros = ProductsTypes::model()->with('products')->findAll();
                //var_dump($filtros);
		$this->render('index',array('Files'=>$Files,'guias'=>$guias,'tipoArchivos'=>$tipoArchivos, 'filtros'=>$filtros));
                          
                 
          
	}
        
        
     
}