<?php
class WebUser extends CWebUser {
    private $_model = null;
 
    function getRole() {
        if($users = $this->getModel()){
            // в таблице Users есть поле role
            return $users->role;
        }
    }
 
    private function getModel(){
        if (!$this->isGuest && $this->_model === null){
            $this->_model = Authdata::model()->findByPk(array(
            	'idauthData' => $this->id, 
            	'employee_idEmployee' => 'employee_idEmployee'), array('select' => 'role'));
        }
        return $this->_model;
    }
}
?>