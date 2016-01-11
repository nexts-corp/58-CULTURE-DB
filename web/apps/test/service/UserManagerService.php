<?php

namespace apps\user\service;

use th\co\bpg\cde\core\CServiceBase;
use th\co\bpg\cde\data\CDataContext;
use apps\user\interfaces\IUserManagerService;

class UserManagerService extends CServiceBase implements IUserManagerService {

    public $datacontext;
    public $logger;
    public $md = "apps\\common\\model";
    public $ent = "apps\\common\\entity";

    public function __construct() {
        $this->logger = \Logger::getLogger("root");
        $this->datacontext = new CDataContext(NULL);
    }

    public function listsUser(){
        $sql = "SELECT"
                ." ur.id, ur.name, ur.surname, ur.username, rl.role,"
                ." dp.department, ur.email, ur.telephone, ur.address,ur.isActive "
            ." FROM ".$this->ent."\\User ur"
            ." JOIN ".$this->ent."\\Role rl WITH rl.code = ur.roleCode"
            ." JOIN ".$this->ent."\\Department dp WITH dp.id = ur.departmentId";
        $data = $this->datacontext->getObject($sql);
        
        return $data;
        
    }
    
    public function listsRole(){
        $sql = "SELECT"
                ." rl.id, rl.role, rl.code"
            ." FROM ".$this->ent."\\Role rl";
        $data = $this->datacontext->getObject($sql);
        
        return $data;
    }

    public function listsDepartment() {
        $sql = "SELECT"
                ." dp.id, dp.department"
            ." FROM ".$this->ent."\\Department dp";
        $data = $this->datacontext->getObject($sql);
        
        return $data;
    }
    
    public function insert($user){
        $return = true;
        
        $info = new \apps\common\entity\User();
        $info->username = $user->username;
        $dataInfo = $this->datacontext->getObject($info);
        if(count($dataInfo) == 0){
            if (!$this->datacontext->saveObject($user)) {
                $return = $this->datacontext->getLastMessage();
            }
        }
        else{
            $return = "Username already exists";
        }
        
        return $return;
    }
    
    public function update($user) {
        $return = true;
        
        $info = new \apps\common\entity\User();
        $info->id = $user->id;
        $dataInfo = $this->datacontext->getObject($info);
        $dataInfo[0]->name = $user->name;
        $dataInfo[0]->surname = $user->surname;
        $dataInfo[0]->roleCode = $user->roleCode;
        $dataInfo[0]->departmentId = $user->departmentId;
        $dataInfo[0]->email = $user->email;
        $dataInfo[0]->telephone = $user->telephone;
        $dataInfo[0]->address = $user->address;    
		$dataInfo[0]->isActive = $user->isActive;
        if (!$this->datacontext->updateObject($dataInfo[0])) {
            $return = $this->datacontext->getLastMessage();
        }
        
        return $return;
    }
    
    public function delete($user) {
        $return = true;
        
        $info = new \apps\common\entity\User();
        $info->id = $user->id;
        $dataInfo = $this->datacontext->getObject($info);
        if(!$this->datacontext->removeObject($dataInfo)){
            $return = $this->datacontext->getLastMessage();
        }
        return $return;
    }
}

?>