<?php

namespace apps\test\interfaces;

/**
 * @name ITestService
 * @uri /test
 * @description ข้อมูลเจ้าหน้าที่
 */
interface ITestService {

    /**
     * @name listsUser
     * @uri /listsUser
     * @return String[] lists Description
     * @description รายชื่อเจ้าหน้าที่
     * @authen true
     * @resource 1000
     */
    public function listsUser();
    
    /**
     * @name listsRole
     * @uri /listsRole
     * @return String[] lists Description
     * @description สิทธิผู้ใช้งาน
     * @authen true
     * @resource 1000
     */
    public function listsRole();
    
    /**
     * @name listsDepartment
     * @uri /listsDepartment
     * @return String[] lists Description
     * @description หน่วยงาน
     * @authen true
     * @resource 1000
     */
    public function listsDepartment();
    
    /**
     * @name insert
     * @uri /insert
     * @param apps\common\entity\User user Description
     * @return boolean add Description
     * @description เพิ่มข้อมูลเจ้าหน้าที่
     * @authen true
     * @resource 1000
     */
    public function insert($user);

    /**
     * @name update
     * @uri /update
     * @param apps\common\entity\User user Description
     * @return boolean update Description
     * @description อัพเดทข้อมูลเจ้าหน้าที่
     * @authen true
     * @resource 1000
     **/
    public function update($user);

    /**
     * @name delete
     * @uri /delete
     * @param apps\common\entity\User user Description
     * @return boolean delete Description
     * @description ลบข้อมูลเจ้าหน้าที่
     * @authen true
     * @resource 1000
     **/
    public function delete($user);
}
