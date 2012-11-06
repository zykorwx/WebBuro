<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	private $_id;
	
	public function authenticate()
	{
		$users=User::model()->find('LOWER(username)=?',array(strtolower($this->username)));
		if($users===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if(!$users->validatePassword($this->password))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else{
			$this-> _id=$users->id;
			$this->setState('username',$users->username);
			$this->username=$users->username;
			$this->errorCode=self::ERROR_NONE;
		}
			
		return $this->errorCode==self::ERROR_NONE;
	}
	
	public function get_Id(){
		return $this->_id;
	}
}