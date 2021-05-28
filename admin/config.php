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
    $sql4 = $conn->prepare("INSERT INTO units(school, department, unit_title, unit_name) VALUES(?, ?, ?, ?)");
    //$sql5 = $conn->prepare("SELECT id FROM courses WHERE full_name=?");
    $sql6 = $conn->prepare("SELECT * FROM units");
    $sql7 = $conn->prepare("INSERT INTO schools (school_name, date_created) VALUES(?, ?)");
    $sql8 = $conn->prepare("SELECT * FROM schools");
    $sql9 = $conn->prepare("INSERT INTO departments(school, dpt_abbr, name) VALUES(? ,? ,?)");
    $sql10 = $conn->prepare("SELECT * FROM departments");
    $sql11 = $conn->prepare("SELECT * FROM departments WHERE school=?");
    $sql12 = $conn->prepare("INSERT INTO students(school,course,reg_num, first_name, mid_name, last_name, gender, parent_name, parent_work, disabled, nationality, phone_num, email, id_num) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

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
    
    if(isset($_POST["adddept"]) && $_SERVER["REQUEST_METHOD"]=="POST"){
        addDept();
    }

    if(isset($_POST["register"]) && $_SERVER["REQUEST_METHOD"]=="POST"){
        addStudent();
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
        global $sql4;
        $school = $_POST["school"];
        $dpt = $_POST["dpts"];
        $title = $_POST["unit-title"];
        $name = $_POST["unit-name"];

        $sql4->execute(array($school, $dpt, $title ,$name));
    }

    function addschool(){
        global $sql7;
        $name = $_POST["schoolname"];
        $datecreated = date('l\, F jS\, Y ');
        $sql7->execute(array($name, $datecreated));

        header("location:addschool.php");
    }

    function addDept(){
        global $sql9;
        $school = $_POST["school"];
        $abbr = $_POST["dptcode"];
        $name = $_POST["dptname"];

        $sql9->execute(array($school, $abbr, $name));
        header("location: adddept.php");
    }

    function addStudent(){
        global $sql12;
        $school = $_POST["school"];
        $course = $_POST["course"];
        $regnum = $_POST["regnum"];
        $firstname = $_POST["firstname"];
        $midname = $_POST["midname"];
        $lastname = $_POST["lastname"];
        $gender = $_POST["gender"];
        $parent = $_POST["parent"];
        $work = $_POST["work"];
        $disability = $_POST["disability"];
        $nationality = $_POST["nationality"];
        $mobile = $_POST["mobile"];
        $email = $_POST["email"];
        $idnumber = $_POST["idnumber"];
        $address = $_POST["address"];

        $sql12->execute(array($school, $course, $regnum, $firstname, $midname, $lastname, $gender, 
        $parent, $work, $disability, $nationality, $mobile, $email, $idnumber));
    }
?>