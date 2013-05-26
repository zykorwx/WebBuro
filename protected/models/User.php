<?php

/**
 * This is the model class for table "tbl_user".
 *
 * The followings are the available columns in table 'tbl_user':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $fecha_creacion
 * @property string $sesion
 *
 * The followings are the available model relations:
 * @property TblAlumno[] $tblAlumnos
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	
	public $password2;
	public $verifyCode;
	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		/*
		return array(
			array('id, username, password, email, sesion', 'required'),
			array('id', 'numerical', 'integerOnly'=>true),
			array('username, password', 'length', 'max'=>45),
			array('email', 'length', 'max'=>128),
			array('fecha_creacion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password, email, fecha_creacion, sesion', 'safe', 'on'=>'search'),
		);
		*/
		return array(
                        /* Due to a fellow user's observation this note is being 
                        * posted for users. Using filters, you can combine certain
                        * variables together to simplify the processing. Where this
                        * was pointed out was for the question and answer filtering
                        * to lowercase. In fact the username as well. Technically
                        * the more efficient way is to process them as followed:
                        * array('username,question,answer', 'filter', 'filter'=>'strtolower'),
                        */
                        array('username','length','max'=>32),
                        // convert username to lower case
                        array('username', 'filter', 'filter'=>'strtolower'),
                        array('password','length','max'=>64, 'min'=>6),
                        array('password2','length','max'=>64, 'min'=>6),
                        // compare password to repeated password
                        array('password', 'compare', 'compareAttribute'=>'password2'), 
                        array('email','length','max'=>256),
                        // make sure email is a valid email
                        array('email','email'),
                        // make sure username and email are unique
                        array('username, email', 'unique'), 
                        array('pregunta','length','max'=>100),
                        // convert question to lower case
                        array('pregunta', 'filter', 'filter'=>'strtolower'),
                        array('respuesta','length','max'=>100),
                        // convert answer to lower case
                        array('respuesta', 'filter', 'filter'=>'strtolower'),
                        array('username, institucion, password, password2, email, pregunta, respuesta', 'required'),

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
			'tblDeudores' => array(self::HAS_MANY, 'Deudor', 'iduser'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Nombre de usuario',
			'password' => 'Password',
			'email' => 'Email',
			'fecha_creacion' => 'Fecha Creacion',
			'sesion' => 'Sesion',
			'institucion=>'=>'Instituto',
		);
	}

	
	public function validatePassword($password){
		return $this->hashPassword($password,$this->sesion)===$this->password;
	}
	
	public function hashPassword($password,$salt){
		return md5($salt.$password);
	}
	
	public function generateSalt(){
		return uniqid('',true);
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('institucion',$this->institucion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}