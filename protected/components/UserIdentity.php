<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	
	public function authenticate()
	{
		$users = Authdata::model()->find('LOWER(login)=?', array(strtolower($this->name)));
		if($users === null)
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		else if ($users->validatePassword(md5($this->password))) 
			$this->errorCode = self::ERROR_PASSWORD_INVALID;

		else
		{
			$this->_id = $users->idauthData;
			$this->username = $users->login;

			$auth=Yii::app()->authManager;

			echo "user role = ".$users->role.", user id = ".$this->_id;
        	if(!$auth->isAssigned($users->role,$this->_id))
        	{
            	if($auth->assign($users->role, $this->_id))
            	{
                	Yii::app()->authManager->save();
            	}
        	}
        	
        	$this->errorCode=self::ERROR_NONE;
		}
		return $this->errorCode == self::ERROR_NONE;
	}


	public function getId()
	{
		return $this->_id;
	}

}