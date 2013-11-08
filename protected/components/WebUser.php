<?php
class WebUser extends CWebUser {
    private $_model = null;
    private $_idEmployee = null;

    function getRole() {
        if($user = $this->getModel()){
            return $user->role;
        }
    }
 
    private function getModel(){
        if (!$this->isGuest && $this->_model === null){
            $searchedRow = Authdata::model()->findBySql('SELECT * FROM authdata WHERE idauthData='.$this->id);
            $this->_idEmployee = $searchedRow->employee_idEmployee;
            
            $this->_model = Authdata::model()->findByPk(array('idauthData' => $this->id, 'employee_idEmployee' => $this->_idEmployee));
        }
        return $this->_model;
    }
}
?>