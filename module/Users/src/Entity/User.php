<?php

namespace Users\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * This class represents a registered user.
 * @ORM\Entity()
 * @ORM\Table(name="users")
 */
class User {

    /**
     * @ORM\Id
     * @ORM\Column(name="id")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     *
     * @ORM\Column(name="type")
     */
    protected $type;

    /**
     * @ORM\Column(name="password")  
     */
    protected $password;

    /**
     *
     * @ORM\Column(name="company") 
     */
    protected $company;

    /**
     * @ORM\Column(name="company_logo")  
     */
    protected $company_logo;

    /**
     * @ORM\Column(name="fullname")  
     */
    protected $fullName;

    /**
     * @ORM\Column(name="mobile")  
     */
    protected $mobile;

    /**
     * @ORM\Column(name="email")  
     */
    protected $email;

    /**
     * @ORM\Column(name="doc_type")
     */
    protected $doc_type;

    /**
     * @ORM\Column(name="docidnumber")
     */
    protected $docidnumber;

    /**
     * @ORM\Column(name="address")
     */
    protected $address;

    /**
     * @ORM\Column(name="regdate")
     */
    protected $regdate;

    /**
     * @ORM\Column(name="lastlogindate")
     */
    protected $lastlogindate;

    /**
     * @ORM\Column(name="lastloginipaddr")
     */
    protected $lastloginipaddr;

    /**
     * @ORM\Column(name="regip")
     */
    protected $regip;

    /**
     * Returns user ID.
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Sets user ID. 
     * @param int $id    
     */
    public function setId($id) {
        $this->id = $id;
    }

    public function getType() {
        return $this->type;
    }

    public function setType($email) {
        $this->type = $type;
    }

    public function getCompany() {
        return $this->company;
    }

    public function setCompany($company) {
        $this->company = $company;
    }

    public function getCompany_logo() {
        return $this->company_logo;
    }

    public function setCompany_logo($company_logo) {
        $this->company_logo = $company_logo;
    }

    public function getFullName() {
        return $this->fullName;
    }

    public function setFullName($fullName) {
        $this->fullName = $fullName;
    }

    public function getMobile() {
        return $this->mobile;
    }

    public function setMobile($mobile) {
        $this->mobile = $mobile;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getDocType() {
        return $this->doc_type;
    }

    public function setDocType($doc_type) {
        $this->doc_type = $doc_type;
    }

    public function getDocidnumber() {
        return $this->docidnumber;
    }

    public function setDocidnumber($docidnumber) {
        $this->docidnumber = $docidnumber;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAddress($Address) {
        $this->address = $Address;
    }

}

/*
id
type
password
company
company_logo
fullname
mobile
email
doc_type
docidnumber
address
regdate
lastlogindate
lastloginipaddr
regip

 */