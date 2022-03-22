<?php

    session_start();
    include_once "../libraries/boilerplate.php";
    include_once "../resources/models/user.php";
    include_once "../resources/models/tasks.php";
    include_once "../resources/controllers/taskReader.php";
    include_once "../resources/controllers/taskSubmitter.php";

    if(array_key_exists("form", $_POST) && array_key_exists("openTask", $_SESSION))
    {
        $form = $_POST["form"];
        $task = $_SESSION["openTask"];
        $taskReader = new TaskReader($task);
        $taskSubmitter = new TaskSubmitter($form, $taskReader);

        $results = $taskSubmitter->checkAnswers();

    }
?>