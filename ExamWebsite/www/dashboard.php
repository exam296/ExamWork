<?php
    session_start();
    include_once "../libraries/boilerplate.php";
    include_once "../resources/models/user.php";
    include_once "../resources/models/tasks.php";

    if(array_key_exists("User", $_SESSION)){

        $user = unserialize($_SESSION["User"]);
        $tasks = new Tasks();
        $feedback = new Feedback();
        echo $blade->run("dashboard", array("page"=>"dashboard", "user"=>$user, "tasks"=>$tasks->getStudentTasks($user, false), "feedback"=>$feedback->getStudentFeedback($user),"debug"=>$SITE_DEBUG_ENABLED));

    }
    else{
        header("Location: index.php");
    }

?>
