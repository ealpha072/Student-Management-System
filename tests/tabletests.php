<?php require "../admin/config.php";
    $array = [];
    $arr = [];

    $mysql = $conn ->prepare("SELECT DISTINCT school FROM courses");
    $mysql1 = $conn->prepare("SELECT full_name FROM courses where school=?");
    //$mysql2 = $conn->prepare("SELECT school, full_name FROM courses WHERE school IN (SELECT DISTINCT school from courses)");
    $mysql->execute();
    //$mysql2->execute();
    $results = $mysql->fetchAll(\PDO::FETCH_ASSOC);

    //$res = $mysql2->fetchAll(PDO::FETCH_ASSOC);
    //print_r($res)."<br>";



    array_push($array );

    foreach ($results as $sch) {
        # code...
        array_push($array, $sch["school"]);
    }

    

    foreach ($array as $row) {
        $mysql1->execute(array($row));

        $re = $mysql1->fetchAll(PDO::FETCH_ASSOC);
        array_push($arr, $re);
        
        //echo var_dump($re)."<br>";


    }

    foreach ($arr as $key) {
        # code...
        //echo var_dump($key)."<br>";
        foreach ($key as $k) {
            # code...
            echo $k["full_name"]."<br>";
        }
    }
    
   // echo var_dump($arr["full_name"]);
?>