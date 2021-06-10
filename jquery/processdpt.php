<?php require "../admin/config.php";

$query= $conn->prepare("SELECT id, dpt_abbr, name FROM departments WHERE school = ?");
$schoolName = $_GET["schoolname"];
$query->execute(array($schoolName));
$results = $query->fetchAll(PDO::FETCH_ASSOC);

//echo var_dump($results);
echo "<table class = \"table table-striped table-bordered\">";
 echo  "<caption>Departments-->" .$schoolName. "</caption>
    <thead>
        <tr>
            <th scope=col>S No</th>
            <th scope=col>Department Code</th>
            <th scope=col>Department Name</th>
        </tr>
    </thead>
    <tbody>";
        foreach ($results as $row ) {
            echo "<tr>";
                echo "<td>".$row["id"] . "</td>";
                echo "<td>".$row["dpt_abbr"] . "</td>";
                echo "<td>".$row["name"] . "</td>";
            echo "</tr>";
        }
    echo "</tbody>"; 
    echo "</table>";
?>