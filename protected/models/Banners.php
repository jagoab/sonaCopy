<?php

/**
 * This is the model class for table "banners".
 *
 * The followings are the available columns in table 'banners':
 * @property integer $id
 * @property string $ruta
 * @property integer $orden
 * @property string $link
 * @property integer $active
 * @property string $language
 */
class Banners extends CActiveRecord
{

	/**
	 * Returns the static model of the specified AR class.
	 *
	 * @param string $className
	 *        	active record class name.
	 * @return Banners the static model class
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
		return 'banners';
	}

	/**
	 *
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array (array ('ruta, orden, active, language','required' ),array ('orden, active','numerical','integerOnly' => true ),array ('ruta, link','length','max' => 500 ),array ('language','length','max' => 2 ),
				// The following rule is used by search().
				// Please remove those attributes that should not be searched.
				array ('id, ruta, orden, link, active, language','safe','on' => 'search' ) );
	}

	/**
	 *
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array ();
	}

	/**
	 *
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array ('id' => 'ID','ruta' => 'Ruta','orden' => 'Orden','link' => 'Link','active' => 'Active','language' => 'Language' );
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
		
		$criteria->compare('id', $this->id);
		$criteria->compare('ruta', $this->ruta, true);
		$criteria->compare('orden', $this->orden);
		$criteria->compare('link', $this->link, true);
		$criteria->compare('active', $this->active);
		$criteria->compare('language', $this->language, true);
		
		return new CActiveDataProvider($this, array ('criteria' => $criteria ));
	}
}