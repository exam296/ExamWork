<?php

    session_start();
    include_once "../libraries/boilerplate.php";
    include_once "../resources/models/usermodel.php";
    include_once "../resources/models/taskmodel.php";
    include_once "../resources/controllers/taskSubmitter.php";

    if(array_key_exists("form", $_POST))
    {
        $taskSubmitter = new TaskSubmitter($_POST["form"]);
    }
?>