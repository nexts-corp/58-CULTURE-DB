<?php

namespace apps\oauth\service;

use th\co\bpg\cde\core\CServiceBase;
use th\co\bpg\cde\collection\CJView;
use th\co\bpg\cde\collection\CJViewType;
use th\co\bpg\cde\data\CDataContext;
use apps\oauth\interfaces\IAuthenService;
use Firebase\JWT\JWT;

class AuthenService extends CServiceBase implements IAuthenService {

    public $datacontext;
    public $logger;
    public $md = "apps\\common\\model";
    public $ent = "apps\\common\\entity";

    function __construct() {
        $this->logger = \Logger::getLogger("root");
        $this->datacontext = new CDataContext(NULL);
    }

    public function authorization() {
        $code = $this->getRequest()->code;
        if ($this->getRequest()->username && $this->getRequest()->password) {
            $username = $this->getRequest()->username;
            $password = $this->getRequest()->password;
            $check = new \apps\common\entity\User();
            $check->username = $username;
            $check->password = $password;
			$check->isActive="Y";

            $user = $this->datacontext->getObject($check);
            //print_r($user);
            if (count($user) > 0) {

                $data = base64_decode($code);
                $datas = explode("|", $data);
                $cc = (array) JWT::decode($datas[1], "123456", array('HS256'));
                $pp = array(
                    "uid" => $user[0]->id
                );
                $uid = JWT::encode($pp, "123456");
                $euid = base64_encode($uid);

                $authUrl = $cc['OAUTH2_CALLBACK_URL'] . "?code=" . $euid;
                // echo $authUrl;

                header('Location: ' . $authUrl);
                exit;
                //        return false;
            } else {
                $view = new CJView("signin", CJViewType::HTML_VIEW_ENGINE);
                $view->code = $code;
                $view->username = $username;
                $view->password = $password;
                return $view;
                // return "xxxx";
            }
        } else {
            $view = new CJView("signin", CJViewType::HTML_VIEW_ENGINE);
            $view->code = $code;
            return $view;
        }
    }

    public function authenticate() {
        $this->logger->info("authenticate.....");
        $euid = $this->getRequest()->code;
        $uid = base64_decode($euid);

        $uidd = (array) JWT::decode($uid, "123456", array('HS256'));

        $check = new \apps\common\entity\User();
        $check->id = $uidd['uid'];
        $user = $this->datacontext->getObject($check);
        if (count($user) > 0) {

            $role = new \apps\common\entity\Role();
            $role->code = $user[0]->roleCode;

            $xrole = $this->datacontext->getObject($role);

            $acc = new \th\co\bpg\cde\collection\CJAccount();
            $acc->code = $user[0]->username;
            $acc->name =$user[0]->name." ".$user[0]->surname;
            $acc->role = $user[0]->roleCode;
            $acc->domain = $user[0]->roleCode;
            $acc->resources = array();
            $acc->resources[] = $xrole[0]->permission;

            $uinfo = JWT::encode($acc, "123456");
            $uinfo = base64_encode($uinfo);
            // return $uinfo;
            print $uinfo;
            exit();
        }
    }

}
