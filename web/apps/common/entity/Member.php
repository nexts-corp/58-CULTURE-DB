<?php

namespace apps\common\entity;

/**
 * @Entity
 * @Table(name="Member")
 */
class Member extends EntityBase {
    
    /**
     * @Id 
     * @Column(type="integer",length=11,name="MemberId")
     * @GeneratedValue
     */
    public $memberId;
    
    /** @Column(type="string",length=100, name="Username") */
    public $username;
 
    /** @Column(type="string",length=100, name="Password") */
    public $password;  
    
    /** @Column(type="integer",length=11, name="DepartmentId") */
    public $departmentId;      
    
    /** @Column(type="string",length=200, name="Firstname") */
    public $firstname;
    
    /** @Column(type="string",length=200, name="Lastname") */
    public $lastname;
    
    /** @Column(type="string",length=200, name="Email") */
    public $email;
    
    /** @Column(type="string",length=200, name="Telephone") */
    public $telephone;
    
    
    /** @Column(type="string",length=20, name="MemberStatus") */
    public $memberStatus;

    
    /** @Column(type="integer",length=1, name="MemberType") */
    public $memberType;
    
    /** @Column(type="integer",length=13, name="IdCard") */
    public $idCard;
    
    /** @Column(type="text", name="Addresss") */
    public $addresss;
    
    
    /** @Column(type="date", name="DateOfBirth",) */
    public $dateOfBirth;

    public function getMemberId() {
        return $this->memberId;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getDepartmentId() {
        return $this->departmentId;
    }

    public function getFirstname() {
        return $this->firstname;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTelephone() {
        return $this->telephone;
    }

    public function getMemberStatus() {
        return $this->memberStatus;
    }

    public function getMemberType() {
        return $this->memberType;
    }

    public function getIdCard() {
        return $this->idCard;
    }

    public function getAddresss() {
        return $this->addresss;
    }
//
    public function getDateOfBirth() {
        return $this->dateOfBirth;
    }

    public function setMemberId($memberId) {
        $this->memberId = $memberId;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setDepartmentId($departmentId) {
        $this->departmentId = $departmentId;
    }

    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    public function setMemberStatus($memberStatus) {
        $this->memberStatus = $memberStatus;
    }

    public function setMemberType($memberType) {
        $this->memberType = $memberType;
    }

    public function setIdCard($idCard) {
        $this->idCard = $idCard;
    }

    public function setAddresss($addresss) {
        $this->addresss = $addresss;
    }

    public function setDateOfBirth($dateOfBirth) {
        $this->dateOfBirth = $dateOfBirth;
    }


    
    

}
