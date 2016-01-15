<?php

namespace apps\dashboard\interfaces;

/**
 * @name IDashboardService
 * @uri /dashboard
 * @description Dashboard
 */
interface IDashboardService {

    
    
    /**
     * @name insert
     * @uri /insert
     * @param apps\common\entity\Member member Description
     * @return boolean add Description
     * @description เพิ่มข้อมูลเจ้าหน้าที่
     * @resource 1000
     */
    public function insert($member);

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
    
    /**
     * @name Dashboardindex
     * @uri /view/index
     * @description แสดงหน้า Dashboard
     * @resource 1000
     **/
    public function index();
    

    
}
