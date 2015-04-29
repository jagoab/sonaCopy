<?php

/**
 * This is the model class for table "products_texts".
 *
 * The followings are the available columns in table 'products_texts':
 * @property string $id
 * @property string $name
 * @property string $text
 * @property integer $visible
 * @property string $product
 * @property string $language
 * @property integer $category
 *
 * The followings are the available model relations:
 * @property Languages $language0
 * @property Products $product0
 */
class ProductsTexts extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProductsTexts the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'products_texts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('text, visible, product, language, category', 'required'),
			array('visible, category', 'numerical', 'integerOnly'=>true),
			array('product', 'length', 'max'=>10),
			array('language', 'length', 'max'=>2),
			array('name', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, text, visible, product, language, category', 'safe', 'on'=>'search'),
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
			'language0' => array(self::BELONGS_TO, 'Languages', 'language'),
			'product0' => array(self::BELONGS_TO, 'Products', 'product'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'text' => 'Text',
			'visible' => 'Visible',
			'product' => 'Product',
			'language' => 'Language',
			'category' => 'Category',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('text',$this->text,true);
		$criteria->compare('visible',$this->visible);
		$criteria->compare('product',$this->product,true);
		$criteria->compare('language',$this->language,true);
		$criteria->compare('category',$this->category);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}