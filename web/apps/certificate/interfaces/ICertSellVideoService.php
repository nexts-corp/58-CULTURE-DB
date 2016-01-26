<?php

namespace apps\certificate\interfaces;

/**
 * @name ILicenseService
 * @uri /certsellvideo
 * @description ขอบใบอนุญาต
 */
interface ICertSellVideoService {

    
    
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
     * @name add
     * @uri /add
     * @description เพิ่มใบอนุญาต
     * @sitemap true
     **/
    public function viewAdd();
    
    /**
     * @name Update
     * @uri /edit
     * @description แก้ไขใบอนุญาตร้านเกม
     * @sitemap true
     **/
    public function viewUpdate();    

}
