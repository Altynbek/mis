<?php

/**
 * This is the model class for table "jobinfo".
 *
 * The followings are the available columns in table 'jobinfo':
 * @property integer $idJobInfo
 * @property string $startDate
 * @property string $endDate
 * @property integer $isMainSpecialty
 * @property integer $employee_idEmployee
 *
 * The followings are the available model relations:
 * @property Employee $employeeIdEmployee
 */
class Jobinfo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jobinfo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('startDate, isMainSpecialty, employee_idEmployee', 'required'),
			array('isMainSpecialty, employee_idEmployee', 'numerical', 'integerOnly'=>true),
			array('endDate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idJobInfo, startDate, endDate, isMainSpecialty, employee_idEmployee', 'safe', 'on'=>'search'),
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
			'employeeIdEmployee' => array(self::BELONGS_TO, 'Employee', 'employee_idEmployee'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idJobInfo' => 'Id Job Info',
			'startDate' => 'Start Date',
			'endDate' => 'End Date',
			'isMainSpecialty' => 'Is Main Specialty',
			'employee_idEmployee' => 'Employee Id Employee',
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

		$criteria->compare('idJobInfo',$this->idJobInfo);
		$criteria->compare('startDate',$this->startDate,true);
		$criteria->compare('endDate',$this->endDate,true);
		$criteria->compare('isMainSpecialty',$this->isMainSpecialty);
		$criteria->compare('employee_idEmployee',$this->employee_idEmployee);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Jobinfo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
