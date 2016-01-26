<?php

namespace apps\certificate\interfaces;

/**
 * @name ILicenseService
 * @uri /certificate
 * @description ขอบใบอนุญาต
 */
interface ICertificateService {

    
    
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
     * @name login
     * @uri /view/index
     * @description หน้าจัดการขอใบอนุญาต
     * @resource 1000
     **/
    public function viewIndex();
        
    /**
     * @name login
     * @uri /view/certmovie
     * @description หน้าจัดการขอใบอนุญาตภาพยนตร์
     * @resource 1000
     **/
    public function viewCertMovie();

    /**
     * @name login
     * @uri /view/certgames
     * @description หน้าจัดการขอใบอนุญาตร้านเกม
     * @resource 1000
     **/
    public function viewCertGames();

    /**
     * @name login
     * @uri /view/certkaraoke
     * @description หน้าจัดการขอใบอนุญาตร้านคาราโอเกะ
     * @resource 1000
     **/
    public function viewCertKaraoke();
    
    /**
     * @name login
     * @uri /view/certsellmovie
     * @description หน้าจัดการขอใบอนุญาตเช่า แลกเปลี่ยน จำหน่ายภาพยนตร์
     * @resource 1000
     **/
    public function viewCertSellMovie();
    
    /**
     * @name login
     * @uri /view/certsellvideo
     * @description หน้าจัดการขอใบอนุญาตเช่า แลกเปลี่ยน จำหน่ายวีดิทัศน์
     * @resource 1000
     **/
    public function viewCertSellVideo();
}
