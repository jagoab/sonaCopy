<?php

/**
 * This is the model class for table "carrer".
 *
 * The followings are the available columns in table 'carrer':
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $path
 * @property string $carrer
 * @property string $menssage
 */
class Carrer extends CActiveRecord
{
    /**
     * Returns the static model of the specified AR class.
     * @return Carrer the static model class
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
        return 'carrer';
    }
    public $verifyCode;
    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name, email, phone, path, carrer', 'required'),
            array('name, email, path', 'length', 'max'=>100),
            array('phone', 'length', 'max'=>25),
            array('carrer', 'length', 'max'=>50),
            array('menssage', 'safe'),
            array('email', 'email'),

            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, name, email, phone, path, carrer, menssage', 'safe', 'on'=>'search'),
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
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'path' => 'Path',
            'carrer' => 'Carrer',
            'menssage' => 'Menssage',
            'verifyCode'=>'Verification Code',
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

        $criteria->compare('id',$this->id);
        $criteria->compare('name',$this->name,true);
        $criteria->compare('email',$this->email,true);
        $criteria->compare('phone',$this->phone,true);
        $criteria->compare('path',$this->path,true);
        $criteria->compare('carrer',$this->carrer,true);
        $criteria->compare('menssage',$this->menssage,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }
}