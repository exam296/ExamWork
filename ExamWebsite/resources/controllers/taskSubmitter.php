<?php
    include_once "../models/userresult.php";
    //Takes POST data
    //Validates
    //Compare answers to JSON
    //Upload results to database (and somehow any open ended questions)
    //Return success
    class TaskSubmitter {


    function __construct($formPostData, $taskReader){
        $this->formData = $formPostData;
        $this->formData = json_decode($this->formData, true);
        $this->taskReader = $taskReader;


        $this->userResults = [];
    }


    function checkAnswers(){
       $this->taskReader->readTaskFile();

        $fileQuestions = $this->taskReader->getQuestions();


        $setAnswers = [];
        $userAnswers = [];
        $userAnswerable = [];


        //Increment through each user answer
        //Get the id from the name (q_#)
        //Check if the question in the JSON file has an answer
        //Compare answers

        for($i=0; $i<count($this->formData); $i++){
            $currentFormId = $this->validateInput($this->formData[$i]["name"]);
            $currentFormValue = $this->validateInput($this->formData[$i]["value"]);
            
            array_push($userAnswers, $currentFormValue);
            


            $qPos = strpos($currentFormId, "q_")+2;

            //Since qPos can be 0 but not false, is_numeric is used to check.
            if(is_numeric($qPos) && strlen($currentFormId)<4){
                $id = substr($currentFormId, $qPos);
                $id = intval($id);
                //We now have integer id from post.
                //Check the corresponding question in the JSON file
                if(isset($fileQuestions[$id]) 
                    && array_key_exists("answer", $fileQuestions[$id])){
                        //This is answerable
                        array_push($userAnswerable, $id);
                    }
            }
        }


            //Now we have array of user answers
            //Compare answers against JSON ids
            for($i=0; $i<count($userAnswerable); $i++){
                $fileAnswer = $fileQuestions[$i]["answer"];
                $fileMarks = $fileQuestions[$i]["marks"];
                $userAnswer = $userAnswers[$userAnswerable[$i]];
                //Simple usage of ternary operator to build string
                $answerCorrect = ($fileAnswer===$userAnswer)
                $answerCorrectStr = $result ? "correct" : "incorrect";

                print($fileAnswer . " = " . $userAnswer . " : " . $answerCorrectStr . "\n");
                
                $result = new UserResult();
                $result->questionNo = $userAnswerable[$i];
                $result->marksEarned = $fileMarks;
                
            }
    }

    //Taken from login
    function validateInput($input){
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }
}



?>