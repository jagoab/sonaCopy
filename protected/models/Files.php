<?php

/**
 * This is the model class for table "files".
 *
 * The followings are the available columns in table 'files':
 * @property string $id
 * @property integer $active
 * @property string $name
 * @property string $path
 * @property string $version
 * @property string $language
 * @property string $pathTypeFile
 * @property integer $category
 *
 * The followings are the available model relations:
 * @property FilesTypes $pathTypeFile0
 * @property Languages $language0
 */
class Files extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Files the static model class
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
		return 'files';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('active, name, path, language, pathTypeFile, category', 'required'),
			array('active, category', 'numerical', 'integerOnly'=>true),
			array('language', 'length', 'max'=>2),
			array('pathTypeFile', 'length', 'max'=>10),
			array('version', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, active, name, path, version, language, pathTypeFile, category', 'safe', 'on'=>'search'),
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
			'pathTypeFile0' => array(self::BELONGS_TO, 'FilesTypes', 'pathTypeFile'),
			'language0' => array(self::BELONGS_TO, 'Languages', 'language'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'active' => 'Active',
			'name' => 'Name',
			'path' => 'Path',
			'version' => 'Version',
			'language' => 'Language',
			'pathTypeFile' => 'Path Type File',
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
		$criteria->compare('active',$this->active);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('path',$this->path,true);
		$criteria->compare('version',$this->version,true);
		$criteria->compare('language',$this->language,true);
		$criteria->compare('pathTypeFile',$this->pathTypeFile,true);
		$criteria->compare('category',$this->category);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}