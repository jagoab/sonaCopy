<?php

/**
 * This is the model class for table "products_products_type".
 *
 * The followings are the available columns in table 'products_products_type':
 * @property string $product_type
 * @property string $product
 */
class ProductsProductsType extends CActiveRecord
{

	/**
	 * Returns the static model of the specified AR class.
	 *
	 * @param string $className
	 *        	active record class name.
	 * @return ProductsProductsType the static model class
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
		return 'products_products_type';
	}

	/**
	 *
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array (array ('product_type, product','required' ),array ('product_type, product','length','max' => 10 ),
				// The following rule is used by search().
				// Please remove those attributes that should not be searched.
				array ('product_type, product','safe','on' => 'search' ) );
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
		return array ('product_type' => 'Product Type','product' => 'Product' );
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
		
		$criteria->compare('product_type', $this->product_type, true);
		$criteria->compare('product', $this->product, true);
		
		return new CActiveDataProvider($this, array ('criteria' => $criteria ));
	}
}