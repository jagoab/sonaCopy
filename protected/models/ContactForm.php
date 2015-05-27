<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class ContactForm extends CFormModel
{
	public $name;
	public $email;
    public $city;
    public $phone;	
	public $body;
	public $verifyCode;
	public $uploaded_file;
	public $Carrer;
	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// name, email, subject and body are required
			array('name, email,Carrer,phone,body', 'required'),
                        array('name','length','min'=>6, 'max'=>40),
                        array('email','length','min'=>5, 'max'=>40),
                        array('city','length','min'=>5, 'max'=>40),
                        array('phone','length','min'=>5, 'max'=>20),
                        array('body','length','min'=>5, 'max'=>255),
			// email has to be a valid email address			
                        array('email', 'email'),
			// verifyCode needs to be entered correctly
			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
			'verifyCode'=>'Verification Code',
		);
	}
}