
<?php
    include_once "../libraries/boilerplate.php";
    include_once "../resources/controllers/logincontroller.php";
 
    $statusMessages = [];

    if(sizeof($_POST)>0){
        print_r($_POST);
        //There is POST data, make sure it is the right data
        $login = new Login($_POST);

        $status = $login->process();

        if($status != "success"){
            array_push($statusMessages,$status);
        }

        //Add signup query to url again
        $_GET["sign"] = 1;

    }
    echo $blade->run("login", array("status" => $statusMessages));





?>
