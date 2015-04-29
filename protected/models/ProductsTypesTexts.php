<?php

/**
 * This is the model class for table "products_types_texts".
 *
 * The followings are the available columns in table 'products_types_texts':
 * @property string $id
 * @property string $name
 * @property string $description
 * @property integer $active
 * @property string $product_type
 * @property string $language
 *
 * The followings are the available model relations:
 * @property Languages $language0
 * @property ProductsTypes $productType
 */
class ProductsTypesTexts extends CActiveRecord
{

	/**
	 * Returns the static model of the specified AR class.
	 *
	 * @param string $className
	 *        	active record class name.
	 * @return ProductsTypesTexts the static model class
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
		return 'products_types_texts';
	}

	/**
	 *
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array (array ('name, description, active, product_type, language','required' ),array ('active','numerical','integerOnly' => true ),array ('product_type','length','max' => 10 ),array ('language','length','max' => 2 ),
				// The following rule is used by search().
				// Please remove those attributes that should not be searched.
				array ('id, name, description, active, product_type, language','safe','on' => 'search' ) );
	}

	/**
	 *
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array ('language0' => array (self::BELONGS_TO,'Languages','language' ),'productType' => array (self::BELONGS_TO,'ProductsTypes','product_type' ) );
	}

	/**
	 *
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array ('id' => 'ID','name' => 'Name','description' => 'Description','active' => 'Active','product_type' => 'Product Type','language' => 'Language' );
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
		
		$criteria->compare('id', $this->id, true);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('description', $this->description, true);
		$criteria->compare('active', $this->active);
		$criteria->compare('product_type', $this->product_type, true);
		$criteria->compare('language', $this->language, true);
		
		return new CActiveDataProvider($this, array ('criteria' => $criteria ));
	}
}