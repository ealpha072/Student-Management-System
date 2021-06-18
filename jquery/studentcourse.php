<?php require "../admin/config.php";
    $sql = $conn->prepare("SELECT full_name from courses WHERE school = ?");
    $thisSchool = $_GET["school"];
    $sql->execute(array($thisSchool));
    $results = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    echo "<select name=\"courses\" class=\"form-control form-control\">";
        echo "<option value=\"\" selected disabled>Choose a course.....</option> ";
        foreach($results as $row){
            echo "<option value=\"".$row["full_name"]."\">"; 
            echo $row["full_name"]; 
            echo "</option>"; 
        }
    echo "</select>";

?>