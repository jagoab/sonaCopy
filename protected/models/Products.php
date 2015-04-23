<?php

/**
 * This is the model class for table "products".
 *
 * The followings are the available columns in table 'products':
 * @property string $id
 * @property string $name
 * @property integer $active
 * @property string $model
 * @property integer $score
 * @property string $trademark
 *
 * The followings are the available model relations:
 * @property Trademarks $trademark0
 * @property ProductsImages[] $productsImages
 * @property ProductsTexts[] $productsTexts
 */
class Products extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Products the static model class
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
		return 'products';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, active, trademark', 'required'),
			array('active, score', 'numerical', 'integerOnly'=>true),
			array('trademark', 'length', 'max'=>10),
			array('model', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, active, model, score, trademark', 'safe', 'on'=>'search'),
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
			'trademark0' => array(self::BELONGS_TO, 'Trademarks', 'trademark'),
			'productsImages' => array(self::HAS_MANY, 'ProductsImages', 'product'),
			'productsTexts' => array(self::HAS_MANY, 'ProductsTexts', 'product'),
                        'ProductsCountries' => array(self::HAS_MANY, 'ProductsCountries', 'product_id'),
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
			'active' => 'Active',
			'model' => 'Model',
			'score' => 'Score',
			'trademark' => 'Trademark',
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
		$criteria->compare('active',$this->active);
		$criteria->compare('model',$this->model,true);
		$criteria->compare('score',$this->score);
		$criteria->compare('trademark',$this->trademark,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}