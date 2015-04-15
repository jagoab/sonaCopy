<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}
        
        
        /*
         * Esta es la vista para seleccionar la lista de los paises
         */
        public function actionSelector(){
            
            $this->render('selector');
        }       

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
            
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
             include("geolocalizacion/geoiploc.php"); 
            if (empty($_POST['checkip']))
                {
                    $ip = $_SERVER["REMOTE_ADDR"]; 
                }
                 else
                {
                $ip = $_POST['checkip']; 
                }

//                echo "Tu dirección IP es:"; 
//                echo($ip); echo" <br>";
//                echo "Tu País es :";  echo(getCountryFromIP($ip, " NamE"));
                  $country= getCountryFromIP($ip, "code");
//                echo "Pais: "; 
                //echo $country;
            
//            $ip=$_SERVER['REMOTE_ADDR'];  
            
//           $html = file_get_contents("http://freegeoip.net/json/".$ip);
//            $html= json_decode($html);
//            $country=$html->country_code;
            
            if($country=='AU'){
             $this->actionflagUrl(strtolower($country));
            }elseif($country=='CN'){
             $this->actionflagUrl(strtolower($country),'ch');
            }elseif($country=='HK'){
             $this->actionflagUrl(strtolower($country),'ch');
            }elseif($country=='SG'){
             $this->actionflagUrl(strtolower($country),'ch');
            }elseif($country=='DE'){
             $this->actionflagUrl(strtolower($country));
            }elseif($country=='VE'){
             $this->actionflagUrl(strtolower($country),'es');
            }elseif($country=='CO'){
             $this->actionflagUrl(strtolower($country),'es');
            }elseif($country=='CO'){
             $this->actionflagUrl(strtolower($country),'es');
            }elseif($country=='BR'){
             $this->actionflagUrl(strtolower($country),'po');
            }elseif($country=='MX'){
             $this->actionflagUrl(strtolower($country),'es');
            }elseif($country=='PE   '){
             $this->actionflagUrl(strtolower($country),'es');
            }elseif($country=='PA'){
             $this->actionflagUrl(strtolower($country),'es');
            }elseif($country=='CL'){
             $this->actionflagUrl(strtolower($country),'es');
            }elseif($country=='US'){
             $this->actionflagUrl(strtolower($country));
            }else{
		$this->render('selector');
            }
	}
	
	public function actionflagUrl($flag='us', $lang='en'){		
            Yii::app()->session['flag'] = $flag;
            Yii::app()->language=$lang;
	    $this->redirect(Yii::app()->request->baseUrl.'/'.$lang.'/home/index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}
        
       public function actionParnert()
	{
				$this->render('Parnert');
		
	}
        public function actionFaq()
	{
				$this->render('Faq');
		
	}
	/**Y
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}