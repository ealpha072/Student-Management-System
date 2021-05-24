<?php
    //connect to a database
    $dsn = "mysql:host=localhost;dbname=sms;charset=utf8mb4";
    $password = "";
    $username = "root";

    //try the connection
    try{
        $conn = new PDO($dsn, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        //throw $th;
        //echo "Connection failed".$e->getMessage();
    }
    //prepare statments
    $sql1 = $conn->prepare("SELECT * FROM admin WHERE username =? AND password=?");
    
    if(isset($_POST['login']) && $_SERVER["REQUEST_METHOD"]=="POST"){
        login();
    }

    //login code
    function login(){
        global $sql1;
        $username = $_POST["username"];
        $password = $_POST["password"];
        $sql1->execute(array($username, $password));
        //$rows = $sql1->rowCount();
        $results = $sql1->fetchAll(PDO::FETCH_ASSOC);
        echo var_dump($results);
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
    

    
        




    

?>