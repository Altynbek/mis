<?php

/**
 * This is the model class for table "employee".
 *
 * The followings are the available columns in table 'employee':
 * @property integer $idEmployee
 * @property string $lastName
 * @property string $firstName
 * @property string $middleName
 * @property string $dateOfBirth
 * @property string $placeOfBirth
 * @property string $Sex
 *
 * The followings are the available model relations:
 * @property Authdata[] $authdatas
 * @property Contacts[] $contacts
 * @property Education[] $educations
 * @property Jobinfo[] $jobinfos
 * @property Passport[] $passports
 */
class Employee extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'employee';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lastName, firstName, middleName, dateOfBirth, placeOfBirth, sex', 'required'),
			array('lastName, firstName, middleName, dateOfBirth, placeOfBirth, sex', 'safe'),
			array('lastName, firstName, middleName', 'length', 'max'=>45),
			array('placeOfBirth', 'length', 'max'=>80),
			array('sex', 'length', 'max'=>3),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idEmployee, lastName, firstName, middleName, dateOfBirth, placeOfBirth, Sex', 'safe', 'on'=>'search'),
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
			'authdatas' => array(self::HAS_MANY, 'Authdata', 'employee_idEmployee'),
			'contacts' => array(self::HAS_MANY, 'Contacts', 'employee_idEmployee'),
			'educations' => array(self::HAS_MANY, 'Education', 'employee_idEmployee'),
			'jobinfos' => array(self::HAS_MANY, 'Jobinfo', 'employee_idEmployee'),
			'passports' => array(self::HAS_MANY, 'Passport', 'employee_idEmployee'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idEmployee' => 'Id Employee',
			'lastName' => 'Last Name',
			'firstName' => 'First Name',
			'middleName' => 'Middle Name',
			'dateOfBirth' => 'Date Of Birth',
			'placeOfBirth' => 'Place Of Birth',
			'Sex' => 'Sex',
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

		$criteria->compare('idEmployee',$this->idEmployee);
		$criteria->compare('lastName',$this->lastName,true);
		$criteria->compare('firstName',$this->firstName,true);
		$criteria->compare('middleName',$this->middleName,true);
		$criteria->compare('dateOfBirth',$this->dateOfBirth,true);
		$criteria->compare('placeOfBirth',$this->placeOfBirth,true);
		$criteria->compare('Sex',$this->Sex,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Employee the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
