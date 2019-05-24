<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Users
 *
 * @author vikra
 */
class Users {
    var $id;
    var $email;
    var $password;
    var $cpassword;
    var $name;
    var $surname;
    var $sex;
    var $relation;
    var $mother_name;
    var $mother_maiden;
    var $aadhar_no;
    var $mob_no;
    var $dob;
    var $marital_status;
    var $occupation;
    var $organization;  
    var $role;
    var $address;
    
    var $country;
    var $region;
    var $district;
    var $loksabha_consty;
    var $assembly_consty;
    var $mandal;
    var $city;
    var $address1;
    var $address2;
    var $postal_code;
    var $jacCoordinator;
    var $sysAdmin;
    
    var $sendJobOpportunities;
    var $sendMatrimony;
    var $sendBusinessPromotions;
    var $sendBloodDonations;
    var $sendmonthlyNewsletters;
   function getId() {
        return $this->id;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function getCpassword() {
        return $this->cpassword;
    }

    function getName() {
        return $this->name;
    }

    function getSurname() {
        return $this->surname;
    }

    function getSex() {
        return $this->sex;
    }

    function getRelation() {
        return $this->relation;
    }

    function getMother_name() {
        return $this->mother_name;
    }

    function getMother_maiden() {
        return $this->mother_maiden;
    }

    function getAadhar_no() {
        return $this->aadhar_no;
    }

    function getMob_no() {
        return $this->mob_no;
    }

    function getDob() {
        return $this->dob;
    }

    function getMarital_status() {
        return $this->marital_status;
    }

    function getOccupation() {
        return $this->occupation;
    }

    function getOrganization() {
        return $this->organization;
    }

    function getRole() {
        return $this->role;
    }

    function getAddress() {
        return $this->address;
    }

    function getAddress1() {
        return $this->address1;
    }

    function getAddress2() {
        return $this->address2;
    }

    function getCity() {
        return $this->city;
    }

    function getRegion() {
        return $this->region;
    }

    function getPostal_code() {
        return $this->postal_code;
    }

    function getCountry() {
        return $this->country;
    }

    function getSendJobOpportunities() {
        return $this->sendJobOpportunities;
    }

    function getSendMatrimony() {
        return $this->sendMatrimony;
    }

    function getSendBusinessPromotions() {
        return $this->sendBusinessPromotions;
    }

    function getSendBloodDonations() {
        return $this->sendBloodDonations;
    }

    function getSendmonthlyNewsletters() {
        return $this->sendmonthlyNewsletters;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setCpassword($cpassword) {
        $this->cpassword = $cpassword;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setSurname($surname) {
        $this->surname = $surname;
    }

    function setSex($sex) {
        $this->sex = $sex;
    }

    function setRelation($relation) {
        $this->relation = $relation;
    }

    function setMother_name($mother_name) {
        $this->mother_name = $mother_name;
    }

    function setMother_maiden($mother_maiden) {
        $this->mother_maiden = $mother_maiden;
    }

    function setAadhar_no($aadhar_no) {
        $this->aadhar_no = $aadhar_no;
    }

    function setMob_no($mob_no) {
        $this->mob_no = $mob_no;
    }

    function setDob($dob) {
        $this->dob = $dob;
    }

    function setMarital_status($marital_status) {
        $this->marital_status = $marital_status;
    }

    function setOccupation($occupation) {
        $this->occupation = $occupation;
    }

    function setOrganization($organization) {
        $this->organization = $organization;
    }

    function setRole($role) {
        $this->role = $role;
    }

    function setAddress($address) {
        $this->address = $address;
    }

    function setAddress1($address1) {
        $this->address1 = $address1;
    }

    function setAddress2($address2) {
        $this->address2 = $address2;
    }

    function setCity($city) {
        $this->city = $city;
    }

    function setRegion($region) {
        $this->region = $region;
    }

    function setPostal_code($postal_code) {
        $this->postal_code = $postal_code;
    }

    function setCountry($country) {
        $this->country = $country;
    }

    function setSendJobOpportunities($sendJobOpportunities) {
        $this->sendJobOpportunities = $sendJobOpportunities;
    }

    function setSendMatrimony($sendMatrimony) {
        $this->sendMatrimony = $sendMatrimony;
    }

    function setSendBusinessPromotions($sendBusinessPromotions) {
        $this->sendBusinessPromotions = $sendBusinessPromotions;
    }

    function setSendBloodDonations($sendBloodDonations) {
        $this->sendBloodDonations = $sendBloodDonations;
    }

    function setSendmonthlyNewsletters($sendmonthlyNewsletters) {
        $this->sendmonthlyNewsletters = $sendmonthlyNewsletters;
    }

public function get_all_users() {
        global $link;
        $result_set = $link->query("SELECT * FROM 'users'");
        return $result_set;
    }
    
    function getDistrict() {
        return $this->district;
    }

    function getLoksabha_consty() {
        return $this->loksabha_consty;
    }

    function getAssembly_consty() {
        return $this->assembly_consty;
    }

    function getMandal() {
        return $this->mandal;
    }

    function getJacCoordinator() {
        return $this->jacCoordinator;
    }

    function getSysAdmin() {
        return $this->sysAdmin;
    }

    function setDistrict($district) {
        $this->district = $district;
    }

    function setLoksabha_consty($loksabha_consty) {
        $this->loksabha_consty = $loksabha_consty;
    }

    function setAssembly_consty($assembly_consty) {
        $this->assembly_consty = $assembly_consty;
    }

    function setMandal($mandal) {
        $this->mandal = $mandal;
    }

    function setJacCoordinator($jacCoordinator) {
        $this->jacCoordinator = $jacCoordinator;
    }

    function setSysAdmin($sysAdmin) {
        $this->sysAdmin = $sysAdmin;
    }

}
