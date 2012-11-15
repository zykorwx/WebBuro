<?php

/**
 * This is the model class for table "tbl_alumno".
 *
 * The followings are the available columns in table 'tbl_alumno':
 * @property integer $id
 * @property string $nombre
 * @property string $apepat
 * @property string $apemat
 * @property string $fecha_naciemiento
 * @property string $descripcion
 * @property integer $iduser
 * @property string $fecha_ingreso
 * @property string $fecha_egreso
 * @property integer $adeudo
 *
 * The followings are the available model relations:
 * @property TblUser $iduser0
 */
class Alumno extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Alumno the static model class
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
		return 'tbl_alumno';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, apepat, apemat, fecha_naciemiento, descripcion', 'required'),
			array('adeudo', 'numerical', 'integerOnly'=>true),
			array('nombre, apepat, apemat', 'length', 'max'=>45),
			array('fecha_ingreso, fecha_egreso', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, apepat, apemat, fecha_naciemiento, descripcion, iduser, fecha_ingreso, fecha_egreso, adeudo', 'safe', 'on'=>'search'),
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
			'iduser0' => array(self::BELONGS_TO, 'User', 'iduser'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'apepat' => 'Apellido paterno',
			'apemat' => 'Apellido materno',
			'fecha_naciemiento' => 'Fecha Naciemiento',
			'descripcion' => 'Descripcion',
			'iduser' => 'Clave institucion',
			'fecha_ingreso' => 'Fecha Ingreso',
			'fecha_egreso' => 'Fecha Egreso',
			'adeudo' => 'Adeudo',
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
		$users=User::model()->find('LOWER(username)=?',array(Yii::app()->user->getid()));
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apepat',$this->apepat,true);
		$criteria->compare('apemat',$this->apemat,true);
		$criteria->compare('fecha_naciemiento',$this->fecha_naciemiento,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('iduser',$this->iduser);
		$criteria->compare('fecha_ingreso',$this->fecha_ingreso,true);
		$criteria->compare('fecha_egreso',$this->fecha_egreso,true);
		$criteria->compare('adeudo',$this->adeudo);
		$criteria->compare('iduser',$users->id);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	

	
	
		public function search2()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apepat',$this->apepat,true);
		$criteria->compare('apemat',$this->apemat,true);
		$criteria->compare('fecha_naciemiento',$this->fecha_naciemiento,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('iduser',$this->iduser);
		$criteria->compare('fecha_ingreso',$this->fecha_ingreso,true);
		$criteria->compare('fecha_egreso',$this->fecha_egreso,true);
		$criteria->compare('adeudo',$this->adeudo);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	
}