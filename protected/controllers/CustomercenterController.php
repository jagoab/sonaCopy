<?php

class CustomerCenterController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
                // 'accessControl', // perform access control for CRUD operations
                // 'postOnly + delete', // we only allow deletion via POST request
        );
    }

    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array(
                    'index',
                    'faqs',
                    'supportbytopic',
                    'catalogs',
                    'customerservices',
                ),
                'users' => array('*'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    public function actionFaqs() {

                $criterio = new CDbCriteria();
		$criterio -> condition = 'language = \''.Yii::app()->language.'\'';
		
		$textos = Texts::model()->findAll($criterio);
		$faq="faq";
		$criterio = new CDbCriteria();
		$criterio -> condition = 'language = \''.Yii::app()->language.'\' and category = 24 and section ='.$faq.' order by name asc ';
		
	
		
          
		$this->render('faqs',array(
				'textos'=>$textos,
				
		));
    }

    public function actionSupportbytopic() {

        $lang = Yii::app()->language;

        $text1 = Texts::model()->find("section = 'supporttopic' AND name = 'text1' AND language = '$lang'");

        $text2 = Texts::model()->find("section = 'supporttopic' AND name = 'text2' AND language = '$lang'");

        $text3 = Texts::model()->find("section = 'supporttopic' AND name = 'text3' AND language = '$lang'");

        $consulta = Texts::model()->findAll(array(
            'select' => "t.id, t.section, t.text as name, t.score, p.text as text",
            'join' => "LEFT JOIN texts p ON (t.id = p.parent AND t.language = p.language)",
            'condition' => "t.section = :section AND t.name = :namet AND p.name = :namep AND t.parent = :parent AND t.active= :active AND t.language = :language",
            'params' => array(':section' => 'supporttopic', ':namet' => 'question', ':namep' => 'answer', ':parent' => 0, ':active' => 1, ':language' => Yii::app()->language),
            'order' => 'score ASC'
        ));

        $this->render('supportbytopic', array('consulta' => @$consulta, 'text1' => $text1, 'text2' => $text2, 'text3' => $text3));
    }

    public function actionCatalogs() {



        $this->render('catalogs', array());
    }

    public function actionCustomerservices() {

        $contact = new ContactForm;



        if (isset($_POST['ContactForm'])) {
            $parser = new CHtmlPurifier();
            $name = @$_POST['ContactForm']['name'];
            $name = $parser->purify($name);
            $name = $this->limpiarCadena($name);

            $subject = @$_POST['ContactForm']['subject'];
            $subject = $parser->purify($subject);
            $subject = $this->limpiarCadena($subject);

            $body = @$_POST['ContactForm']['body'];
            $body = $parser->purify($body);
            $body = $this->limpiarCadena($body);

            $email = @$_POST['ContactForm']['email'];
            $email = $parser->purify($email);
            $email = $this->limpiarCadena($email);

            $country = @$_POST['ContactForm']['country'];
            $country = $parser->purify($country);
            $country = $this->limpiarCadena($country);

            $contact->attributes = $_POST['ContactForm'];
            if ($contact->validate()) {
                Yii::import('application.extensions.phpmailer.JPhpMailer');
                $mail = new JPhpMailer;
                $mail->IsSMTP();
                $mail->Host = 'mail.hkaprint.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'contacto@hkaprint.com';

                $mail->AddAddress('mcastaneda@hkaprint.com'); // Marcia Castañeda
                $mail->AddAddress('mchacon@thefactoryhka.com'); // Natalie Chacón
                $mail->AddAddress('alramos@thefactoryhka.com'); // Alix Ramos
                $mail->AddAddress('aacosta@thefactoryhka.com'); // Alberto Acosta
                $mail->AddAddress('contacto2801@gmail.com');// Horacio Pinto 
                $mail->AddAddress('hpinto@thefactoryhka.com'); // Horacio Pinto
                $mail->AddAddress('eferreira@thefactoryhka.com'); // Efrain Ferreira
                $mail->AddAddress('mmejia.hka@gmail.com'); // Maria Mejía
                $mail->AddAddress('mrojas@thefactoryhka.com'); // Manuel Rojas
                $mail->AddAddress('jfigueira@thefactoryhka.com'); // Sergio Figueira
                $mail->AddAddress('jramirez@thefactoryhka.com'); // Jenny Ramirez

                $mail->Password = 'O5@pvC9K(uT9';
                $mail->SetFrom('contacto@hkaprint.com', 'HKA Print');
                $mail->Subject = 'Contacto Servicio al Cliente HKAPrint';
                $contentido = "<h3>Contacto Servicio al Cliente HKAPrint</h3>
                        <p>Nombre o Empresa: " . $name . "</p>" .
                        "<p>Email:" . $email . "</p>" .
                        "<p>Asunto:" . $subject . "</p>" .
                        "<p>Pais:" . $country . "</p>" .
                        "<p>Comentarios:" . $body . "</p></br></br>" .
                        "<p>NO RESPONDER ESTE EMAIL</p>

              <p>Atentamente</p></br>
              <p>HKA Print</p></br>
              
              <p>Siguenos en  <a href='https://twitter.com/HKAPrint'>Twitter</a></p>

              <p>Siguenos en  <a href='https://www.facebook.com/hkaprint.en'>Facebook</a></p>
              ";
                $mail->MsgHTML($contentido);

                $mail->AltBody = $contentido;
                $mail->AddBCC('jvelasquez@thefactoryhka.com', 'Jose Velasquez');
                if ($mail->Send()) {
                    Yii::app()->user->setFlash('success', Yii::t('lang', 'Thank you very much for contacting us. Soon you will receive a response to your request.'));
                    $this->redirect(array('index'));
                }
            }
        }







        $this->render('customerservices', array('contact' => $contact));
    }

    public function limpiarCadena($valor) {
        $valor = str_ireplace("SELECT", "", $valor);
        $valor = str_ireplace("UPDATE", "", $valor);
        $valor = str_ireplace("INSERT", "", $valor);
        $valor = str_ireplace("COPY", "", $valor);
        $valor = str_ireplace("DELETE", "", $valor);
        $valor = str_ireplace("DROP", "", $valor);
        $valor = str_ireplace("DUMP", "", $valor);
        $valor = str_ireplace(" OR ", "", $valor);
        $valor = str_ireplace("%", "", $valor);
        $valor = str_ireplace("LIKE", "", $valor);
        $valor = str_ireplace("--", "", $valor);
        $valor = str_ireplace("^", "", $valor);
        $valor = str_ireplace("[", "", $valor);
        $valor = str_ireplace("]", "", $valor);
        $valor = str_ireplace("\\", "", $valor);
        $valor = str_ireplace("!", "", $valor);
        $valor = str_ireplace("¡", "", $valor);
        $valor = str_ireplace("?", "", $valor);
        $valor = str_ireplace("=", "", $valor);
        $valor = str_ireplace("&", "", $valor);
        $valor = str_ireplace("`", "", $valor);
        $valor = str_ireplace("\"", "", $valor);
        $valor = str_ireplace(",", "", $valor);
        return $valor;
    }

}
