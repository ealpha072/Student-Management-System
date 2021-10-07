<?php
    try {
        $db = new PDO("sqlite:sms_db.db");
        //echo "Connected";
    } catch (Exception $e) {
        echo "Error ".$e->getMessage();
    }

    $sql1 = $db->prepare("SELECT * FROM admin WHERE username =:username AND password=:password");
    $sql2 = $db->prepare("INSERT INTO courses (school,short_name, full_name, date_created) VALUES (:school, :short_name, :full_name, date_created)");
    $sql7 = $db->prepare("INSERT INTO schools (school_name, date_created) VALUES(:name, :date_created)");
    $sql8 = $db->prepare("SELECT * FROM schools");


    if(isset($_POST['login']) && $_SERVER["REQUEST_METHOD"]=="POST"){
        login();
    }

    if(isset($_POST["addcourse"]) && $_SERVER["REQUEST_METHOD"]=="POST"){
        addCourse();
    }

    if(isset($_POST["addschool"]) && $_SERVER["REQUEST_METHOD"]=="POST"){
        addschool();
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

    function addschool(){
        global $sql7;
        $name = $_POST["schoolname"];
        $datecreated = date('l\, F jS\, Y ');
        $sql7->execute(array(
            ':name'=>$name,
            ':date_created'=>$datecreated));
        header("location:addschool.php");
    }

    function addCourse(){
        global $sql2;
        $school = $_POST["school"];
        $shortname = $_POST["shortname"];
        $fullname = $_POST["fullname"];
        $datecreated = date('l\, F jS\, Y ');

        $sql2->execute(array(
            ':school'=>$school,
            'short_name'=>$shortname,
            'short_name'=>$fullname,
            'date_created'=>$datecreated));
        header("location: addcourse.php");
    }




