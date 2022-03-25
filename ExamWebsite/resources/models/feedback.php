<?php


class Feedback{
    //Take tasks modal
    //Check if any tasks are not in the feedback table
    //Return these tasks

    function __construct($tasks){
        $this->tasks = $tasks;
    }

    function getFeedbackTasks($user){
        $feedbackTasks = [];

        $allTasks = $tasks->getStudentTasks($user, true);

        for($i=0; $i<count($allTasks); $i++){

        }
    }

    function checkFeedback($taskId){
        
    }
}

?>