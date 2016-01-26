<?php

namespace apps\certificate\interfaces;

/**
 * @name ILicenseService
 * @uri /certificate
 * @description ขอใบอนุญาต
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
     * @description 1.ยื่นคำขอใบอนุญาต
     * @resource 1000
     * @sitemap true
     **/
    public function viewIndex();
        
    /**
     * @name login
     * @uri /view/certmovie
     * @description หน้าจัดการขอใบอนุญาตภาพยนตร์
     **/
    public function viewCertMovie();

    /**
     * @name login
     * @uri /view/certgames
     * @description หน้าจัดการขอใบอนุญาตร้านเกม
     **/
    public function viewCertGames();

    /**
     * @name login
     * @uri /view/certkaraoke
     * @description หน้าจัดการขอใบอนุญาตร้านคาราโอเกะ
     **/
    public function viewCertKaraoke();
    
    /**
     * @name login
     * @uri /view/certsellmovie
     * @description หน้าจัดการขอใบอนุญาตเช่า แลกเปลี่ยน จำหน่ายภาพยนตร์
     **/
    public function viewCertSellMovie();
    
    /**
     * @name login
     * @uri /view/certsellvideo
     * @description หน้าจัดการขอใบอนุญาตเช่า แลกเปลี่ยน จำหน่ายวีดิทัศน์
     **/
    public function viewCertSellVideo();
}
