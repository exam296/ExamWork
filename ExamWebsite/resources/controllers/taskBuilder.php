<?php

class TaskBuilder{

    //Gets Task File Identifier
    //Loads JSON file containing questions
    //Constructs a two dimensional array of questions which contain a type, question, picture (optional) and ID
    //TaskBuilder is then passed to Blade the blade template to be rendered and sent to the client
    
    function __construct($task) {
        $this->task = $task;
    }

    function readTaskFile(){
        $taskFile = "\\..\\..\\taskEntry\\" . $this->task["fileIdentifier"].".json";
        $taskFileContents = file_get_contents(__DIR__ . $taskFile, FILE_USE_INCLUDE_PATH);
        $taskJson = json_decode($taskFileContents, true);


        return $taskJson["test"];
    }


}

?>
