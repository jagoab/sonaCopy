<?php

class CarrerController extends Controller
{ 
  
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
	/**
	 * @return array action filters
	 */
	public function filters()
	{ 
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{ 
	return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin','delete','updateActive'),
				'users'=>array('*'),
			),
		);
	}

        

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
//         if(Yii::app()->authManager->checkAccess('crearBanner', Yii::app()->user->getState("rolId"))) {
		$model=new Carrer;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                
		if(isset($_POST['Banners']))
		{
                    //var_dump($_FILES); //exit();
                    
			$model->attributes=$_POST['Banners'];
                       // $model->language = $_POST['Idioma'];
                   //var_dump($_POST['Banners']);exit();
			if(CUploadedFile::getInstance($model,'ruta'))
                        {
                           
                            $archivo = CUploadedFile::getInstance($model,'ruta');
                            $extension = end(explode(".",$archivo->name));
                            $name = substr(md5(uniqid(rand())),0,3);
                            $name = $name.".".$extension;
                            $ruta= '../dascom-test/images/slider'.'/img'.$name;
                          //  $ruta= '../dascom-test/images/slider'.'/img'.$name;
                          
                            $model->ruta ='/images/slider'.'/img'.$name;   
                           if($model->save())
                            {
                                if($archivo !== null)
                                    $archivo->saveAs($ruta);
                                
                                $log = new Logs();
                                $log->description = "Modulo: <b>Banner</b>. <br/>
                                                     Accion: <b>Crear</b>.<br/>
                                                     ID: <b>".$model->id."</b>.";
                                $log->ip = $_SERVER['REMOTE_ADDR'];
                                $log->date = date('d/m/Y h:i:s a');
                                $log->user = Yii::app()->user->getState("id");
                                $log->language = "es";
                                $log->save();
                                $this->redirect(array('admin','id'=>$model->id));
                              
                            }
                        }
		}
		$this->render('create',array(
			'model'=>$model,
		));
      //   } else {

//            $log = new Logs();
//            $log->description = "Usuario ha tratado de accesar a un lugar restringido<br/>
//                                     Modulo: <b>Banner</b>. <br/>
//                                     Accion: <b>Crear</b>.";
//            $log->ip = $_SERVER['REMOTE_ADDR'];
//            $log->date = date('d/m/Y h:i:s a');
//            $log->user = Yii::app()->user->getState("id");
//            $log->language = "es";
//            $log->save();

//            throw new CHttpException(403, 'Su usuario no tiene los privilegios necesarios para acceder a esta seccion, 
//                    porfavor si cree que esto es un error, consulte al administrador del sistema.<br/>
//                    Este evento ha sido registrado.');
        }
	

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
        public function actionUpdate($id)
	{
            if(Yii::app()->authManager->checkAccess('editarBanner', Yii::app()->user->getState("rolId")))
            {
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                
		if(isset($_POST['Banners']))
		{
                    $model->attributes=$_POST['Banners'];
                  //      var_dump($_POST['Banners']['ruta']); exit();
                   // echo strlen($_POST['Banners']['ruta']); exit();
//                   echo $_POST['Banners']['order']; exit();
                    if(CUploadedFile::getInstance($model,'ruta'))
                    {
                       /* CODIGO ORIGIANL DE JESUS. NO SE ESTABA SUBIENDO EL ARCHIVO DE NUEVO CUANDO SE IBA A MODIFICAR LA IMAGEN 
                        *  $archivo = CUploadedFile::getInstance($model,'ruta');
                        $extension = end(explode(".",$archivo->name));
                        $name = substr(md5(uniqid(rand())),0,25);
                        $name = $name.".".$extension;
                        $model->ruta = Yii::app()->params['folder'].'images/sliders/'.$_POST['Idioma'].'/'.$name;
                        $ruta = Yii::app()->params['serverRoot'].Yii::app()->params['folder'].'images/sliders/'.$_POST['Idioma'].'/'.$name;
						*/
						
			/*CODIGO MODIFICADO POR GUILLERMO. SI FUNCIONA*/
                            $archivo = CUploadedFile::getInstance($model,'ruta');
                            $extension = end(explode(".",$archivo->name));
                            $name = substr(md5(uniqid(rand())),0,25);
                            $name = $name.".".$extension;
                            //$ruta= '../toolbox/images/slider/'.$_POST['Banners']['language'].'/img'.$name;
                            $ruta= '../dascom-test/images/slider'.'/img'.$name;
                       
                             $model->ruta ='/images/slider'.'/img'.$name;
                            if($model->save())
                            {
                                if($archivo !== null)
                                    $archivo->saveAs($ruta);


                            }
                    }
                    else
                    {
                        $banner = Banners::model()->findByPk($model->id);
                        $model->ruta = $banner->ruta;
                       // $extension = end(explode(".",$banner->ruta));
                        //$name = substr(md5(uniqid(rand())),0,25);
                        //$name = $name.".".$extension;
                        
                       // $model->ruta = '/images/sliders/'.$_POST['Banners']['language'].'/'.$name;
                       //rename(Yii::app()->params['serverRoot'].Yii::app()->params['folder'].$banner->ruta , Yii::app()->params['serverRoot'].Yii::app()->params['folder'].'/images/slider/'.$_POST['Banners']['language'].'/'.$name);
                        $model->save();
                        

                    }
                    $log = new Logs();
                    $log->description = "Modulo: <b>Banner</b>. <br/>
                                         Accion: <b>Actualizar</b>.<br/>
                                         ID: <b>".$model->id."</b>.";
                    $log->ip = $_SERVER['REMOTE_ADDR'];
                    $log->date = date('d/m/Y h:i:s a');
                    $log->user = Yii::app()->user->getState("id");
                    $log->language = "es";
                    $log->save();

                    //$this->redirect(array('admin','id'=>$model->id));
                    $this->redirect(array('banners/admin'));
		}

		$this->render('update',array(
			'model'=>$model,
		));
            }
            else{
                
                $log = new Logs();
                $log->description = "Usuario ha tratado de accesar a un lugar restringido<br/>
                                     Modulo: <b>Banner</b>. <br/>
                                     Accion: <b>Actualizar</b>.";
                $log->ip = $_SERVER['REMOTE_ADDR'];
                $log->date = date('d/m/Y h:i:s a');
                $log->user = Yii::app()->user->getState("id");
                $log->language = "es";
                $log->save();
                
                throw new CHttpException(403,'Su usuario no tiene los privilegios necesarios para acceder a esta seccion, 
                    porfavor si cree que esto es un error, consulte al administrador del sistema.<br/>
                    Este evento ha sido registrado.');
            }
	}


	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Banners');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
           // echo"probar bandera mensaje";
            if(Yii::app()->authManager->checkAccess('verBanner', Yii::app()->user->getState("rolId")))
            {
		$model=new Banners('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Banners']))
			$model->attributes=$_GET['Banners'];

		$this->render('admin',array(
			'model'=>$model,
		));
            }
            else{
                
                $log = new Logs();
                $log->description = "Usuario ha tratado de accesar a un lugar restringido<br/>
                                     Modulo: <b>Banner</b>. <br/>
                                     Accion: <b>Administrar</b>.";
                $log->ip = $_SERVER['REMOTE_ADDR'];
                $log->date = date('d/m/Y h:i:s a');
                $log->user = Yii::app()->user->getState("id");
                $log->language = "es";
                $log->save();
                
                throw new CHttpException(403,'Su usuario no tiene los privilegios necesarios para acceder a esta seccion, 
                    porfavor si cree que esto es un error, consulte al administrador del sistema.<br/>
                    Este evento ha sido registrado.');
            }
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Banners the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Banners::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Banners $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='banners-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
       
       public function actionUpdateActive()
        {
            if(Yii::app()->authManager->checkAccess('editarBanner', Yii::app()->user->getState("rolId")))
            {
                $value = $_POST['active'];
                $id = $_POST['id'];

                if($value == "true")
                    $activo = 1;
                else
                    $activo = 0;

                $banner = $this->loadModel($id);
                $banner->active = $activo;
                $banner->save();
                
                $log = new Logs();
                $log->description = "Modulo: <b>Banner</b>. <br/>
                                     Accion: <b>Activar</b>.<br/>
                                     ID: <b>".$id."</b>.";
                $log->ip = $_SERVER['REMOTE_ADDR'];
                $log->date = date('d/m/Y h:i:s a');
                $log->user = Yii::app()->user->getState("id");
                $log->language = "es";
                $log->save();
                
                exit();
            }
            else{
                
                $log = new Logs();
                $log->description = "Usuario ha tratado de accesar a un lugar restringido<br/>
                                     Modulo: <b>Banner</b>. <br/>
                                     Accion: <b>Activar</b>.";
                $log->ip = $_SERVER['REMOTE_ADDR'];
                $log->date = date('d/m/Y h:i:s a');
                $log->user = Yii::app()->user->getState("id");
                $log->language = "es";
                $log->save();
                
                throw new CHttpException(403,'Su usuario no tiene los privilegios necesarios para acceder a esta seccion, 
                    porfavor si cree que esto es un error, consulte al administrador del sistema.<br/>
                    Este evento ha sido registrado.');
            }
        }
}
