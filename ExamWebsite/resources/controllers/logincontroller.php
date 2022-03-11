<?php

    class Login {


        function __construct($post) {

            $this->postData = $post;
            $this->email = "";
            $this->emailValid = false;

            $pass = true;
            if(array_key_exists("email",$post) && array_key_exists("password", $post)){
                //Can log in
                //validate email
                $validated = $this->validateInput($post["email"]);
                if (filter_var($validated, FILTER_VALIDATE_EMAIL)) { //Php function, filters a variable using enum.
                    $this->emailValid = true;
                    $this->email = $validated;
                  }
            }
        }

        function process(){

            if(!$this->emailValid){
                return "invalidEmail";
            }

            //First, create a new user
            $user = new User();

            //Next, check whether the user is trying to log in or sign up
            $signUp = false;
            if(array_key_exists("isSigning", $this->postData)){
                $signUp = true;
            }

            if($signUp){
                //To sign up, validate inputs for full name and age
                $validName = $this->validateInput($this->postData["fullName"]);
                $dateOfBirth = new DateTime($this->validateInput($this->postData["dateOfBirth"]));
                $today = new DateTime();
                $difference = $today->diff($dateOfBirth);
                $age = $difference->y;
                if($age > 100 || $age < 0){
                    return "invalidAge";
                }

                //Check if the user is a student or a teacher
                $isTeacher = array_key_exists("isTeacher", $this->postData);

                //Populate the user model
                $user->setFullName($validName);
                $user->setDateOfBirth($dateOfBirth);
                $user->setEmail($this->email);
                $user->hashAndSetPassword($this->postData["password"]);
                $user->setTeacher($isTeacher);
                $user->signUp();

                
                
            }
        }

        //Help from W3Schools (https://www.w3schools.com/php/php_form_url_email.asp)
        function validateInput($input){
            $input = trim($input);
            $input = stripslashes($input);
            $input = htmlspecialchars($input);
            return $input;
        }
    }

?>