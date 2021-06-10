<?php require "../admin/config.php";

$query= $conn->prepare("SELECT id, short_name,full_name FROM courses WHERE school = ?");
$schoolName = $_GET["schoolname"];
$query->execute(array($schoolName));
$results = $query->fetchAll(PDO::FETCH_ASSOC);

//echo var_dump($results);
echo "<table class = \"table table-striped table-bordered\">";
 echo  "<caption>" .$schoolName. "</caption>
    <thead>
        <tr>
            <th scope=col>S No</th>
            <th scope=col>Short Name</th>
            <th scope=col>Full Name</th>
        </tr>
    </thead>
    <tbody>";
        foreach ($results as $row ) {
            echo "<tr>";
                echo "<td>".$row["id"] . "</td>";
                echo "<td>".$row["short_name"] . "</td>";
                echo "<td>".$row["full_name"] . "</td>";
            echo "</tr>";
        }
    echo "</tbody>"; 
    echo "</table>";
?>