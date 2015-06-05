<?php

/**
 * This is the model class for table "room".
 *
 * The followings are the available columns in table 'room':
 * @property integer $r_id
 * @property string $r_name
 * @property string $r_renter
 * @property integer $r_num_renter
 *
 * The followings are the available model relations:
 * @property Transaction[] $transactions
 */
class Room extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'room';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('r_id', 'required'),
			array('r_id, r_num_renter', 'numerical', 'integerOnly'=>true),
			array('r_name, r_renter', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('r_id, r_name, r_renter, r_num_renter', 'safe', 'on'=>'search'),
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
			'transactions' => array(self::HAS_MANY, 'Transaction', 'room_r_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'r_id' => 'เลขห้อง',
			'r_name' => 'ชื่อห้อง',
			'r_renter' => 'ผู้เช่า',
			'r_num_renter' => 'ผู้อาศัย',
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

		$criteria->compare('r_id',$this->r_id);
		$criteria->compare('r_name',$this->r_name,true);
		$criteria->compare('r_renter',$this->r_renter,true);
		$criteria->compare('r_num_renter',$this->r_num_renter);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Room the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
