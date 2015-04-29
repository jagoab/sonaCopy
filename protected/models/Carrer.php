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
class Carrer extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Banners the static model class
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
		return 'banners';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ruta, orden, active', 'required','message'=>'Este campo es obligatorio: {attribute}'),
			array('orden, active', 'numerical', 'integerOnly'=>true),
			array('ruta, link', 'length', 'max'=>500),
			//array('language', 'length', 'max'=>2),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, ruta, orden, link, active, language', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'ruta' => Yii::t('modules', "Imagen"),
			'orden' => Yii::t('modules', "Orden"),
			'link' => 'Link',
			'active' => Yii::t('modules', "Activo"),
                        'language' => Yii::t('modules', "Lenguaje")
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

		$criteria->compare('id',$this->id);
		$criteria->compare('ruta',$this->ruta,true);
		$criteria->compare('orden',$this->orden);
		$criteria->compare('link',$this->link,true);
		$criteria->compare('active',$this->active,true);
		$criteria->compare('lenguage',$this->language,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'sort'=>array(
                            'defaultOrder'=>'orden ASC',
                          ),
		));
	}
        
         public function visible($visible,$id)
        {
            if($visible == 1)
            {   
                $cadena = '<div id="'.$id.'" class="make-switch" style="z-index: 1;" data-on="success" data-off="danger" data-on-label="'.Yii::t('pages', 'YES').'" data-off-label="NO">
                                <input type="checkbox" checked="checked" value="" />
                           </div>';
                return $cadena;
            }
            else
            {
                $cadena = '<div id="'.$id.'" class="make-switch" style="z-index: 1;" data-on="success" data-off="danger" data-on-label="'.Yii::t('pages', 'YES').'" data-off-label="NO">
                                <input type="checkbox" value="" />
                           </div>';
                return $cadena;
            }
        }
	
}
