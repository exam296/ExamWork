<?php

class User {

    function __construct(){
        $this->fullName = "";
        $this->dateOfBirth = "0-0-0000";
        $this->email = "";
        $this->passwordHash = "";
        $this->isTeacher = false;
    }

    function setFullName($fullName){
        $this->fullName = $fullName;
    }

    function setDateOfBirth($dateOfBirth){
        $this->dateOfBirth = $dateOfBirth;
    }

    function setEmail($email){
        $this->email = $email;
    }

    function hashAndSetPassword($password){
        $this->passwordHash = password_hash($password, PASSWORD_DEFAULT);
    }

    function setTeacher($isTeacher){
        $this->isTeacher = $isTeacher;
    }

    function signUp(){
        //Check if teacher or not
        if($this->isTeacher){
            $db = $this->connectDatabase();
        }
    }

    //---------------------------------
    function connectDatabase(){
        $db = new mysqli("localhost", "GibJohn", "Z4yrJvyG)qaqsFFH", "gibjohn");
        if($db->connect_errno){
            echo "Database Failed";
        }
        return $db;
    }

}


?>