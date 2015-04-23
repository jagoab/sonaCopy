<?php

class CarrerController extends Controller {

    /**
     * Declares class-based actions.
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

    public function actionIndex() {

        $mailer = Yii::createComponent('application.extensions.mailer.phpmailer', true);
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
			 // $mailer->AddAddress('druiz@thefactoryhka.com');
                            $mailer->AddAddress('jramirez@thefactoryhka.com');
			    $mailer->AddAddress('thefactoryhka@gmail.com');
			    $mailer->AddAddress('horaciopinto2@gmail.com');		                                 
                            $mailer->AddAddress('John.Vidaurrazaga@dascom.com');
                            $mailer->AddAddress('EFerreira@dascom.com');
                            $mailer->AddAddress('Sarrieta@dascom.com');
                            $mailer->AddAddress('Gmedina@dascom.com');
                            $mailer->AddAddress('albertoacostac@yahoo.com');
			    $mailer->AddAddress('mmejia@thefactoryhka.com');
		            $mailer->AddAddress('mmejia.hka@gmail.com');
/*Australia*/
                if (Yii::app()->session['flag'] == 'au') {
                    $mailer->AddAddress('alex@sonaray.com.au');
                }
/*China*/
                if (Yii::app()->session['flag'] == 'cn' || Yii::app()->session['flag'] == 'hk') {
                    $mailer->AddAddress('joewong@sonarayled.com');
                }
/*Singapur*/
                if (Yii::app()->session['flag'] == 'sg') {
                    $mailer->AddAddress('petertan@dascom.com.sg');
                }
/*Alemania*/
                if (Yii::app()->session['flag'] == 'de') {
                    $mailer->AddAddress('MJoksch@dascom.com');
                }
/*Venezuela*/
                if (Yii::app()->session['flag'] == 've') {
                
			 $mailer->AddAddress('ralmillategui@dascom.com');

                }
/*Colombia*/
                if (Yii::app()->session['flag'] == 'co') {
                    $mailer->AddAddress(' pvelez@thefactoryhka.com');
			
			 $mailer->AddAddress('ralmillategui@dascom.com');
                }
/*Brasil*/
                if (Yii::app()->session['flag'] == 'br') {
                    $mailer->AddAddress('MGranado@dascom.com');
                    $mailer->AddAddress('MAsche@dascom.com');
		     $mailer->AddAddress('ralmillategui@dascom.com');
                }
/*Mexico*/
                if (Yii::app()->session['flag'] == 'mx') {
                    $mailer->AddAddress('abroswilliamson@dascom.com');
                    $mailer->AddAddress('jaflores@dascom.com');	
		    $mailer->AddAddress('jaflorez@thefactoryhka.com');		
		    $mailer->AddAddress('juanalejandroflorez@gmail.com');
                }
/*Peru*/
                if (Yii::app()->session['flag'] == 'pe') {
                    $mailer->AddAddress('achuquizuta@thefactoryhka.com; ');
                    $mailer->AddAddress('atorres@thefactoryhka.com');
 			$mailer->AddAddress('ralmillategui@dascom.com');
                }
/*Panama*/
                if (Yii::app()->session['flag'] == 'pa') {
                    $mailer->AddAddress('JDiaz@dascom.com');
                    $mailer->AddAddress('ralmillategui@dascom.com');
		   
                }
/*Chile*/
                if (Yii::app()->session['flag'] == 'cl') {
                
		    $mailer->AddAddress('ralmillategui@dascom.com');

                }
/*Usa*/
                if (Yii::app()->session['flag'] == 'us') {
                    $mailer->AddAddress('racorn@dascom.com');
                }



                $mailer->From = 'noreply@dascomla.com'; // Mail de origen

                $mailer->FromName = 'SonarayLed.com'; // Nombre del que envia

                $mailer->WordWrap = 50; // Largo de las lineas

                $mailer->IsHTML(true); // Podemos incluir tags html

                $mailer->Subject = "Contact from sonaray web page";

                $mailer->Body = '<div style="text-align: left;  padding: 30px;">
                                <div style="font-size: 25px; font-weight: bold; margin-bottom: 30px;">Contact information</div>
                                <div style="background-color: #f6f6f6; text-align: left; padding: 30px;line-height: 35px;">
                                <b>NAME </b>: <span style="text-transform: capitalize;">' . $model->name . '</span> <br/>
                                <b>CITY </b>:<span style="text-transform: capitalize;"> ' . $model->city . '</span><br/>
                                <b>EMAIL </b>: ' . $model->email . '<br/>
                                <b>PHONE </b> : ' . $model->phone . '<br/>
                                </div>
                                <div style="font-size: 25px; font-weight: bold; margin-bottom: 30px; margin-top: 30px;">Message</div>

                                <div style="background-color: #f6f6f6; text-align: left; padding: 30px; margin-bottom: 20px;">' . $model->body . '</div>


                                <div style="font-size: 18px; font-weight: bold;">DO NOT REPLY TO THIS EMAIL</div>

                                <div style="text-align: center; color: #0210b8; background-color: #eff0fd; margin-top: 30px;  "><a href="http://sonarayled.com" style="font-size: 25px;">Sonaray</a></div>
                                </div>';

                $mailer->IsSMTP(); // vamos a conectarnos a un servidor SMTP

                $mailer->SMTPAuth = true; // usaremos autenticacion

                $mailer->Username = "noreply@dascomla.com"; // usuario

                $mailer->Password = "123.noreply.123"; // contraseña



                $mailer->Mailer = "smtp";

                $mailer->Host = "ssl://mail.dascomla.com";

                $mailer->Port = 465;

                $mailer->SMTPAuth = true;

                if ($mailer->send()) {
                    Yii::app()->user->setFlash('contact', '<div class="alert alert-success">thanks for contacting us we will get in touch with you shortly.</div>');
                } else {

                    Yii::app()->user->setFlash('contact', '<div class="alert alert-danger">Sorry ! an error occurred on sending the email .</div>');
                }
                $model = new ContactForm;
            }
            
        }

//		$this->render('contact',array('model'=>$model));

        $sql = "SELECT * FROM texts Text WHERE Text.active = 1 AND Text.section = 'contact' AND Text.language = '" . YII::app()->language . "'";
        $contactos = Yii::app()->db->createCommand($sql)->queryAll();

        $sql2 = "SELECT * FROM texts Text WHERE Text.active = 1 AND Text.section = 'carrer' ORDER BY Text.parent DESC ";
        $contactos_list = Yii::app()->db->createCommand($sql2)->queryAll();

        $this->render('index', array('model' => $model, 'contactos' => $contactos, 'contactos_list' => $contactos_list));
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
