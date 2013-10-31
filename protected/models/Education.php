<?php

/**
 * This is the model class for table "education".
 *
 * The followings are the available columns in table 'education':
 * @property integer $idEducation
 * @property string $institution
 * @property string $completionDate
 * @property string $specialty
 * @property string $numberOfDiploma
 * @property string $citezenship
 * @property string $advancedTraining
 * @property string $retraining
 * @property integer $employee_idEmployee
 *
 * The followings are the available model relations:
 * @property Employee $employeeIdEmployee
 */
class Education extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'education';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('institution, completionDate, specialty, numberOfDiploma, citezenship, employee_idEmployee', 'required'),
			array('employee_idEmployee', 'numerical', 'integerOnly'=>true),
			array('institution, specialty', 'length', 'max'=>60),
			array('numberOfDiploma, citezenship', 'length', 'max'=>45),
			array('advancedTraining, retraining', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idEducation, institution, completionDate, specialty, numberOfDiploma, citezenship, advancedTraining, retraining, employee_idEmployee', 'safe', 'on'=>'search'),
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
			'idEducation' => 'Id Education',
			'institution' => 'Institution',
			'completionDate' => 'Completion Date',
			'specialty' => 'Specialty',
			'numberOfDiploma' => 'Number Of Diploma',
			'citezenship' => 'Citezenship',
			'advancedTraining' => 'Advanced Training',
			'retraining' => 'Retraining',
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

		$criteria->compare('idEducation',$this->idEducation);
		$criteria->compare('institution',$this->institution,true);
		$criteria->compare('completionDate',$this->completionDate,true);
		$criteria->compare('specialty',$this->specialty,true);
		$criteria->compare('numberOfDiploma',$this->numberOfDiploma,true);
		$criteria->compare('citezenship',$this->citezenship,true);
		$criteria->compare('advancedTraining',$this->advancedTraining,true);
		$criteria->compare('retraining',$this->retraining,true);
		$criteria->compare('employee_idEmployee',$this->employee_idEmployee);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Education the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
