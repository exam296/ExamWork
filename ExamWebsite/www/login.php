
<?php
    include_once "../libraries/boilerplate.php";
    include_once "../resources/controllers/logincontroller.php";
 
    echo $blade->run("login");




    if(sizeof($_POST)>0){
        //There is POST data, make sure it is the right data
        $login = new Login($_POST);
        $login->process();
    }
?>
