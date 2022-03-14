
<?php
    session_start();
    include_once "../libraries/boilerplate.php";
    include_once "../resources/controllers/logincontroller.php";
 
    $statusMessages = [];

    $isSigning = "0";

    if(sizeof($_POST)>0){
        //There is POST data, make sure it is the right data
        $login = new Login($_POST);

        $status = $login->process();

        if($status != "signedUp" && $status != "loggedIn"){
            array_push($statusMessages,$status);
            session_abort();
        }else{
            $login->toSession();
        }


        if($status == "signedUp"){
            header("Location: signedUp.php");
        }
        else if($status == "loggedIn"){
            header("Location: dashboard.php");
        }


        if($status){
            $isSigning = "1";
        }
    }
    echo $blade->run("login", array("status" => $statusMessages, "isSigning"=>$isSigning));





?>
