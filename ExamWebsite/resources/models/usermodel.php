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

    function getFirstName(){
        return explode(" ", $this->fullName, 2)[0];
    }

    function getLastName(){
        return explode(" ", $this->fullName, 2)[1];
    }


    function signUp(){
        //Check if teacher or not
        if($this->isTeacher){
            $db = $this->connectDatabase();

            //Escape strings to be safe
            $this->fullName = $db->real_escape_string($this->fullName);
            $this->email = $db->real_escape_string($this->email);

            //Current date
            $currentDate = new DateTime();
            $currentDate = $currentDate->format("d-m-Y");
            
            //SQL to try and insert the user data
            $sql = <<<SQL
            INSERT INTO teachers
            (ID, TeacherName, TeacherDateOfBirth, TeacherEmail, TeacherPasswordHash, DateCreated) 
            VALUES 
            (NULL, '$this->fullName', $this->dateOfBirth, '$this->email', '$this->passwordHash', $currentDate)
            SQL;
            print("<br>");
            print($sql);
            
            try{
                $db->query($sql);
            }
            catch(mysqli_sql_exception $e){
                if($e->getCode()===1062){
                    return "userExists";
                }
            }

            //Clear hash as this is serialised.
            $this->passwordHash = "";

            return "signedUp";


        }
        else{
            //Student
            $db = $this->connectDatabase();

            //Escape strings to be safe
            $this->fullName = $db->real_escape_string($this->fullName);
            $this->email = $db->real_escape_string($this->email);

            //Current date
            $currentDate = new DateTime();
            $currentDate = $currentDate->format("d-m-Y");
            
            //SQL to try and insert the user data
            $sql = <<<SQL
            INSERT INTO students
            (ID, StudentName, StudentDateOfBirth, StudentEmail, StudentPasswordHash, DateCreated) 
            VALUES 
            (NULL, '$this->fullName', $this->dateOfBirth, '$this->email', '$this->passwordHash', $currentDate)
            SQL;
            print("<br>");
            print($sql);
            
            try{
                $db->query($sql);
            }
            catch(mysqli_sql_exception $e){
                if($e->getCode()===1062){
                    return "userExists";
                }
            }

            //Clear hash as this is serialised.
            $this->passwordHash = "";

            return "signedUp";
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