<?php require "../admin/config.php";
    $schoolsarray = [];

    $arr = [];

    $mysql = $conn ->prepare("SELECT DISTINCT school FROM courses");
    $mysql1 = $conn->prepare("SELECT short_name, full_name FROM courses where school=?");

    //$mysql2 = $conn->prepare("SELECT school, full_name FROM courses WHERE school IN (SELECT DISTINCT school from courses)");
    $mysql->execute();
    $results = $mysql->fetchAll(PDO::FETCH_ASSOC);


    foreach ($results as $school) {
        array_push($schoolsarray, $school["school"]);
    }

    

    foreach ($schoolsarray as $row) {
        $mysql1->execute(array($row));

        $re = $mysql1->fetchAll(PDO::FETCH_ASSOC);
        array_push($arr, $re);
        
        //echo var_dump($re)."<br>";
        print_r($re);


    }
?>

<form class="form-inline" action="">
                        <div class="input-group mb-3">
                            <select name="sort" id="" class="form-control">
                                <option value="" selected disabled>Sort by</option>
                                <option value=""><button name="schoolsort">School</button></option>
                            </select>
                        </div>
                    </form>