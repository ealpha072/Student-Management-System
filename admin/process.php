<?php
    try {
        $db = new PDO("sqlite:sms_db.db");
        //echo "Connected";
    } catch (Exception $e) {
        echo "Error ".$e->getMessage();
    }

    $sql1 = $db->prepare("SELECT * FROM admin WHERE username =:username AND password=:password");


    if(isset($_POST['login']) && $_SERVER["REQUEST_METHOD"]=="POST"){
        login();
    }

    function login(){
        global $sql1;
        $username = $_POST["username"];
        $password = $_POST["password"];
        $sql1->execute(array(
            ':username'=>$username,
            ':password'=>$password));

        $results = $sql1->fetchAll(PDO::FETCH_ASSOC);

        if( $username===$results[0]['username'] && $password===$results[0]['password']){
            //set session variables
            $_SESSION['loggedin']=true;
            $_SESSION['username'] = $results[0]['username'];
            $_SESSION['msg'] = "You are logged in as an admin";

            header("location: dashboard.php");
        }else{
            echo "There was an error logging you in, check the credentials and try again";
        }

    }



