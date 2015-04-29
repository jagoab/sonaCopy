<?php

/**
 * This is the model class for table "languages".
 *
 * The followings are the available columns in table 'languages':
 * @property string $code
 * @property string $name
 *
 * The followings are the available model relations:
 * @property Files[] $files
 * @property FilesTypes[] $filesTypes
 * @property ProductsTexts[] $productsTexts
 * @property ProductsTypesTexts[] $productsTypesTexts
 */
class Languages extends CActiveRecord
{

	/**
	 * Returns the static model of the specified AR class.
	 *
	 * @param string $className
	 *        	active record class name.
	 * @return Languages the static model class
	 */
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}

	/**
	 *
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'languages';
	}

	/**
	 *
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array (array ('code, name','required' ),array ('code','length','max' => 2 ),array ('name','length','max' => 45 ),
				// The following rule is used by search().
				// Please remove those attributes that should not be searched.
				array ('code, name','safe','on' => 'search' ) );
	}

	/**
	 *
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array ('files' => array (self::HAS_MANY,'Files','language' ),'filesTypes' => array (self::HAS_MANY,'FilesTypes','language' ),'productsTexts' => array (self::HAS_MANY,'ProductsTexts','language' ),'productsTypesTexts' => array (self::HAS_MANY,'ProductsTypesTexts','language' ) );
	}

	/**
	 *
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array ('code' => 'Code','name' => 'Name' );
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.
		$criteria = new CDbCriteria();
		
		$criteria->compare('code', $this->code, true);
		$criteria->compare('name', $this->name, true);
		
		return new CActiveDataProvider($this, array ('criteria' => $criteria ));
	}
}