<?php

namespace apps\member1\service;

use th\co\bpg\cde\core\CServiceBase;
use th\co\bpg\cde\data\CDataContext;
use th\co\bpg\cde\collection\CJView;
use th\co\bpg\cde\collection\CJViewType;
use apps\member\interfaces\IMemberService;

use apps\common\entity;
use apps\common\entity\Department;
use apps\common\entity\Member;

class MemberService extends CServiceBase implements IMemberService  {

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
    
    public function insert($member){
        $return = true;
        $info = new Member();
        $info->username = $member->username;
        
        $dataInfo = $this->datacontext->getObject($info);
        $member->dateOfBirth = new \DateTime("now");
      
        if(count($dataInfo) == 0){
            if (!$this->datacontext->saveObject($member)) {
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


    public function viewManage() {
  
        $view = new CJView("manage", CJViewType::HTML_VIEW_ENGINE);
        return $view;
    }

    public function addMember() {
        $view = new CJView("insert", CJViewType::HTML_VIEW_ENGINE);
        
        $sql = new Department();
        $sql->setDepartmentStatus("YES");
        $data = $this->datacontext->getObject($sql);
        
        $result = array();
        foreach ($data as $key => $value) {
            $result[$key]["numRow"] = $key+1;
            $result[$key]["departmentId"] = $value->departmentId;
            $result[$key]["departmentName"] = $value->departmentName;
        }
        $view->depattment=$result;
        
        return $view;
    }

    public function updateMember() {
        $view = new CJView("update", CJViewType::HTML_VIEW_ENGINE);
        
        $sql = new Department();
        $sql->setDepartmentStatus("YES");
        $data = $this->datacontext->getObject($sql);
        
        $result = array();
        foreach ($data as $key => $value) {
            $result[$key]["numRow"] = $key+1;
            $result[$key]["departmentId"] = $value->departmentId;
            $result[$key]["departmentName"] = $value->departmentName;
        }
        $view->depattment=$result;
        
        return $view;
    }

}

?>