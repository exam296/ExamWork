<?php
class TaskAnswer {

    function __construct(){
        //CompletedTaskID	QuestionNo	Answer	
        $this->completedTaskId = 0;
        $this->questionNo = 0;
        $this->answer = "";
    }

    function setCompletedTaskId($completedTaskId){
        $this->completedTaskId = $completedTaskId;
    }

    function setQuestionNo($questionNo){
        $this->questionNo = $completedTaskId;
    }

    function setAnswer($answer){
        $this->answer = $answer;
    }

    function submit(){
            
        $db = Utils::connectDatabase();

        //TaskAnswer ---
        $sql = <<<SQL
            INSERT INTO `CompletedTasks` VALUES (NULL, $this->userId, $this->marksAchieved, $this->totalMarks, $this->dateCompleted);
            SQL;

        $db->query($sql);

    }

}
?>