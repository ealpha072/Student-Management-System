<?php
require "../admin/config.php";
$school = $_GET["school"];
$sql = $conn->prepare("SELECT name FROM departments WHERE school = ?");
$sql->execute(array($school));
$results = $sql->fetchAll(PDO::FETCH_ASSOC);
//value=\"". $row["name"]."\"

echo "<select name=\"dpts\" class=\"form-control form-control\">";
    echo "<option value=\"\" selected disabled>Choose a Department.........</option> ";
    foreach($results as $row){
        echo "<option value=\"".$row["name"]."\">"; 
        echo $row["name"]; 
        echo "</option>"; 
    }
echo "</select>";
?>
