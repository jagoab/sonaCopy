<?php

class CarrerController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
       public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }
    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
 

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */


    /**
     * Lists all models.
     */
    public function actionIndex() {
        $model = new Carrer;

        if (isset($_POST['Carrer'])) {
           
            $model->attributes = $_POST['Carrer'];
            
             if (CUploadedFile::getInstance($model, 'path')) {
                
             $file = CUploadedFile::getInstance($model, "path");
             $name = $model->name;
             $extension = end(explode(".", $file->name));
             $model->path = Yii::app()->request->baseUrl . '/carrer/' . $name . "." . $extension;
             $ruta = Yii::getPathOfAlias("webroot") . "/carrer/" . $name . "." . $extension;
            
             
             
            if ($model->save()){
               
                if ($file !== null) {
                   
                            $file->saveAs($ruta);
              }
              //$this->redirect(array('view', 'id' => $model->id));
                 Yii::app()->user->setFlash('contact', '<div class="alert alert-success">thanks for contacting us we will get in touch with you shortly.</div>');
           $this->redirect(array('index'));
                 }
               
            
            
             }
        }

        $this->render('index', array(
            'model' => $model,
        ));

    }

    /**
     * Manages all models.
     */


    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id) {
        $model = Carrer::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'carrer-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
