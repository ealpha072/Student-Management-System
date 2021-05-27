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
    $sql2 = $conn->prepare("INSERT INTO courses (school,short_name, full_name, date_created) VALUES (?, ?, ?, ?)");
    $sql3 = $conn->prepare("SELECT * FROM courses");
    $sql4 = $conn->prepare("INSERT INTO units(course_id, unit_title, unit_name) VALUE(?, ?, ?)");
    $sql5 = $conn->prepare("SELECT id FROM courses WHERE full_name=?");
    $sql6 = $conn->prepare("SELECT * FROM units");
    $sql7 = $conn->prepare("INSERT INTO schools (school_name, date_created) VALUES(?, ?)");
    $sql8 = $conn->prepare("SELECT * FROM schools");

    if(isset($_POST['login']) && $_SERVER["REQUEST_METHOD"]=="POST"){ 
        login();
    }

    if(isset($_POST["addcourse"]) && $_SERVER["REQUEST_METHOD"]=="POST"){
        addCourse();
    }

    if(isset($_POST["addunit"]) && $_SERVER["REQUEST_METHOD"]=="POST"){
        addUnit();
    }

    if(isset($_POST["addschool"]) && $_SERVER["REQUEST_METHOD"]=="POST"){
        addschool();
    }    

    //login code
    function login(){
        global $sql1;
        $username = $_POST["username"];
        $password = $_POST["password"];
        $sql1->execute(array($username, $password));
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

    //add course code
    function addCourse(){
        global $sql2;
        $school = $_POST["school"];
        $shortname = $_POST["shortname"];
        $fullname = $_POST["fullname"];
        $datecreated = date('l\, F jS\, Y ');

        $sql2->execute(array($school, $shortname, $fullname, $datecreated));
        header("location: addcourse.php");
    }
    
    function addUnit(){
        global $sql4, $sql5;        
        $course = $_POST["courses"];
        $title = $_POST["unit-title"];
        $name = $_POST["unit-name"];
        $sql5->execute(array($course));
        $results = $sql5->fetchAll(PDO::FETCH_ASSOC);
        $sql4->execute((array($results[0]["id"],$title,$name)));
    }

    function addschool(){
        global $sql7;
        $name = $_POST["schoolname"];
        $datecreated = date('l\, F jS\, Y ');
        $sql7->execute(array($name, $datecreated));

        header("location:addschool.php");
    }
?>