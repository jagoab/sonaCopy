<?php

/**
 * This is the model class for table "registration".
 *
 * The followings are the available columns in table 'registration':
 * @property string $id_registration
 * @property integer $id_level_country
 * @property integer $id_level_city
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $subject
 * @property string $message
 * 
 */
class Registration extends CActiveRecord 
{
	
    public $verifyCode;
    /**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'registration';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, email','required', 'message'=>Yii::t('forms','Please enter a value for {attribute}.')),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_registration, id_level_country, id_level_city', 'safe', 'on'=>'search'),
                        //verifyCode needs to be entered correctly
                        array('email', 'email'),
                        array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
                    );
                
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_registration' => 'Id Registration',
			'id_level_country' => 'Pais',
			'id_level_city' => 'Ciudad',
                        'name' => 'Nombre',
                        'email' => 'Email',
                        'phone' => 'Telefono',
                        'departament' => 'Departamento',
                        'subject' => 'Asunto',
                        'message' => 'Mensaje'
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_registration',$this->id_registration,true);
		$criteria->compare('id_level_country',$this->id_level_country, true);
		$criteria->compare('id_level_city',$this->id_level_city, true);
                $criteria->compare('name',$this->name,true);
                
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function search_city($city_code)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		 $city_result=LevelCity::model()->city_array($city_code);
                 //echo $city_result;exit();
                 return $city_result;
	}
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Registration the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
