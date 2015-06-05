<?php

/**
 * This is the model class for table "transaction".
 *
 * The followings are the available columns in table 'transaction':
 * @property integer $t_id
 * @property string $t_date
 * @property integer $t_e_unit
 * @property double $t_total
 * @property integer $t_status
 * @property string $t_notation
 * @property integer $room_r_id
 *
 * The followings are the available model relations:
 * @property Room $roomR
 */
class Transaction extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'transaction';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('room_r_id', 'required'),
			array('t_e_unit, t_status, room_r_id', 'numerical', 'integerOnly'=>true),
			array('t_total', 'numerical'),
			array('t_notation', 'length', 'max'=>45),
			array('t_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('t_id, t_date, t_e_unit, t_total, t_status, t_notation, room_r_id', 'safe', 'on'=>'search'),
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
			'roomR' => array(self::BELONGS_TO, 'Room', 'room_r_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			't_id' => 'รหัสรายการ',
			't_date' => 'วันที่',
			't_e_unit' => 'หน่วยไฟ',
			't_total' => 'ยอดรวม',
			't_status' => 'สถานะ',
			't_notation' => 'หมายเหตุ',
			'room_r_id' => 'เลขห้อง',
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

		$criteria->compare('t_id',$this->t_id);
		$criteria->compare('t_date',$this->t_date,true);
		$criteria->compare('t_e_unit',$this->t_e_unit);
		$criteria->compare('t_total',$this->t_total);
		$criteria->compare('t_status',$this->t_status);
		$criteria->compare('t_notation',$this->t_notation,true);
		$criteria->compare('room_r_id',$this->room_r_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Transaction the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
