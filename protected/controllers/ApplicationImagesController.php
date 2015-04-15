<?php

class ApplicationImagesController extends Controller
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
				'actions'=>array('create','update','admin','delete'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
               if(Yii::app()->authManager->checkAccess('crearApplicationImages', Yii::app()->user->getState("rolId"))) {
                 $model=new ApplicationImages;                  

		if(isset($_POST['ApplicationImages'])){

                    
                      if ($_FILES['ApplicationImages']['name']['path']) {
                             $model->attributes=$_POST['ApplicationImages'];
                             $ext1 = end(explode('.',$_FILES['ApplicationImages']['name']['path']));   
                             $model->name = $_POST['ApplicationImages']['name'];
                             $model->path = $model->id.".".$ext1;              
                             $model->active = $_POST['ApplicationImages']['active'];
                             $model->language = $_POST['Idioma'];
                             $model->save();
                             
                             /*para que guarde segun el id que corresponde en el registro*/
                             $model->path = $model->id.".".$ext1;                            
                             $model->save();                            
                             
                                move_uploaded_file($_FILES['ApplicationImages']['tmp_name']['path'], Yii::app()->params['serverRoot'].Yii::app()->params['folder'].'/images/applicationSonaray/'.$_POST['Idioma']."/".$model->id.".".$ext1);                             
                                                                
                         }/*fin de if ($_FILES['name']['path'])*/
			
			if($model->save())
				$this->redirect(array('admin'));
			
		}/*fin de if(isset($_POST['ApplicationImages']))*/

		$this->render('create',array('model'=>$model));
            }
            else{
                
                $log = new Logs();
                $log->description = "Usuario ha tratado de accesar a un lugar restringido<br/>
                                     Modulo: <b>Application Images</b>. <br/>
                                     Accion: <b>Crear</b>.";
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
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)                
	{
            if(Yii::app()->authManager->checkAccess('editarApplicationImages', Yii::app()->user->getState("rolId")))
            {
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ApplicationImages'])){

                    
                      if ($_FILES['ApplicationImages']['name']['path']) {
                             $model->attributes=$_POST['ApplicationImages'];
                             $ext1 = end(explode('.',$_FILES['ApplicationImages']['name']['path']));   
                             $model->name = $_POST['ApplicationImages']['name'];
                             $model->path = $model->id.".".$ext1;              
                             $model->active = $_POST['ApplicationImages']['active'];
                             $model->language = $_POST['Idioma'];
                             $model->save();
                             
                             /*para que guarde segun el id que corresponde en el registro*/
                             $model->path = $model->id.".".$ext1;                            
                             $model->save();                            
                             
                                move_uploaded_file($_FILES['ApplicationImages']['tmp_name']['path'], Yii::app()->params['serverRoot'].Yii::app()->params['folder'].'/images/applicationSonaray/'.$_POST['Idioma']."/".$model->id.".".$ext1);                             
                                                                
                         }/*fin de if ($_FILES['name']['path'])*/
			
			if($model->save())
				$this->redirect(array('admin'));
			
		}/*fin de if(isset($_POST['ApplicationImages']))*/
                
                $this->render('create',array('model'=>$model));

            }
            else{
                
                $log = new Logs();
                $log->description = "Usuario ha tratado de accesar a un lugar restringido<br/>
                                     Modulo: <b>Aplicacion Imagenes</b>. <br/>
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
            if(Yii::app()->authManager->checkAccess('eliminarApplicationImages', Yii::app()->user->getState("rolId")))
            {
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
             }  
              else{
                
                $log = new Logs();
                $log->description = "Usuario ha tratado de accesar a un lugar restringido<br/>
                                     Modulo: <b>Applicacines Imagenes</b>. <br/>
                                     Accion: <b>Eliminar</b>.";
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
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('ApplicationImages');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
               if(Yii::app()->authManager->checkAccess('verApplicationImages', Yii::app()->user->getState("rolId")))
               {
                    $model=new ApplicationImages('search');
                    $model->unsetAttributes();  // clear any default values
                    if(isset($_GET['ApplicationImages']))
                            $model->attributes=$_GET['ApplicationImages'];

                    $this->render('admin',array(
                            'model'=>$model,
                    ));
                } else{
                
                $log = new Logs();
                $log->description = "Usuario ha tratado de accesar a un lugar restringido<br/>
                                     Modulo: <b>Aplicacion Imagenes</b>. <br/>
                                     Accion: <b>Admin</b>.";
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
	 * @return ApplicationImages the loaded model
	 * @throws CHttpException
	 */
            
	public function loadModel($id)
	{
		$model=ApplicationImages::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param ApplicationImages $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='application-images-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
