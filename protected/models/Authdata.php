<?php

/**
 * This is the model class for table "authdata".
 *
 * The followings are the available columns in table 'authdata':
 * @property integer $idauthData
 * @property string $login
 * @property string $password
 * @property string $role
 * @property string $email
 * @property integer $employee_idEmployee
 *
 * The followings are the available model relations:
 * @property Employee $employeeIdEmployee
 */
class Authdata extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public $password_repeat;

	public function tableName()
	{
		return 'authdata';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('login, password, role, email, employee_idEmployee, password_repeat', 'required'),
			array('employee_idEmployee', 'numerical', 'integerOnly'=>true),
			array('login, role', 'length', 'max'=>45),
			array('password', 'length', 'max'=>80),
			array('email', 'length', 'max'=>60),
			array('email', 'email'),
			array('password', 'compare'),
			array('password_repeat', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idauthData, login, password, role, email, employee_idEmployee', 'safe', 'on'=>'search'),
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
			'idauthData' => 'Idauth Data',
			'login' => 'Login',
			'password' => 'Password',
			'role' => 'Role',
			'email' => 'Email',
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

		$criteria->compare('idauthData',$this->idauthData);
		$criteria->compare('login',$this->login,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('role',$this->role,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('employee_idEmployee',$this->employee_idEmployee);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Authdata the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function hashPassword($password)
	{
		return md5($password);
	}

	public function validatePassword($password)
	{
		return $this->hashPassword($password)===$this->password;
	}

	public function primaryKey() 
	{
		return array('idauthData', 'employee_idEmployee');
	}
}
