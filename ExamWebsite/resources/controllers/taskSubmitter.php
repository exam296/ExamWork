<?php
    //Takes POST data
    //Validates
    //Compare answers to JSON
    //Upload results to database (and somehow any open ended questions)
    //Return success
    class TaskSubmitter {


    function __construct($formPostData){
        $this->formData = $formPostData;
        $this->formData = json_decode($this->formData, true);
        print_r($this->formData);
    }
}
?>