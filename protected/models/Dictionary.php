<?php

/**
 * This is the model class for table "dictionary".
 *
 * The followings are the available columns in table 'dictionary':
 * @property string $id
 * @property string $tablename
 * @property string $field
 * @property integer $key
 * @property string $value
 * @property string $multi
 * @property string $remark
 * @property string $sphinx_isdel
 * @property string $sphinx_updatetime
 */
class Dictionary extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Dictionary the static model class
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
		return 'dictionary';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tablename, field, key, value, remark', 'required'),
			array('key', 'numerical', 'integerOnly'=>true),
			array('tablename, field', 'length', 'max'=>100),
			array('value', 'length', 'max'=>150),
			array('multi, sphinx_isdel', 'length', 'max'=>1),
			array('remark', 'length', 'max'=>255),
			array('sphinx_updatetime', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, tablename, field, key, value, multi, remark, sphinx_isdel, sphinx_updatetime', 'safe', 'on'=>'search'),
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
			'tablename' => 'Tablename',
			'field' => 'Field',
			'key' => 'Key',
			'value' => 'Value',
			'multi' => 'Multi',
			'remark' => 'Remark',
			'sphinx_isdel' => 'Sphinx Isdel',
			'sphinx_updatetime' => 'Sphinx Updatetime',
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
		$criteria->compare('tablename',$this->tablename,true);
		$criteria->compare('field',$this->field,true);
		$criteria->compare('key',$this->key);
		$criteria->compare('value',$this->value,true);
		$criteria->compare('multi',$this->multi,true);
		$criteria->compare('remark',$this->remark,true);
		$criteria->compare('sphinx_isdel',$this->sphinx_isdel,true);
		$criteria->compare('sphinx_updatetime',$this->sphinx_updatetime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}