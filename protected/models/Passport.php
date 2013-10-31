<?php

/**
 * This is the model class for table "passport".
 *
 * The followings are the available columns in table 'passport':
 * @property integer $idPassport
 * @property string $issuedBy
 * @property string $issueDate
 * @property string $passportNumber
 * @property string $passportSeries
 * @property integer $employee_idEmployee
 *
 * The followings are the available model relations:
 * @property Employee $employeeIdEmployee
 */
class Passport extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'passport';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('issueDate, passportNumber, employee_idEmployee, passportSeries, issuedBy', 'required'),
			array('employee_idEmployee', 'numerical', 'integerOnly'=>true),
			array('issuedBy', 'length', 'max'=>100),
			array('passportNumber, passportSeries', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idPassport, issuedBy, issueDate, passportNumber, passportSeries, employee_idEmployee', 'safe', 'on'=>'search'),
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
			'idPassport' => 'Id Passport',
			'issuedBy' => 'Issued By',
			'issueDate' => 'Issue Date',
			'passportNumber' => 'Passport Number',
			'passportSeries' => 'Passport Series',
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

		$criteria->compare('idPassport',$this->idPassport);
		$criteria->compare('issuedBy',$this->issuedBy,true);
		$criteria->compare('issueDate',$this->issueDate,true);
		$criteria->compare('passportNumber',$this->passportNumber,true);
		$criteria->compare('passportSeries',$this->passportSeries,true);
		$criteria->compare('employee_idEmployee',$this->employee_idEmployee);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Passport the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
