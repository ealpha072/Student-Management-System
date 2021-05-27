<?php 
    require "dashboard.php";
    require "config.php";

    $sql3->execute();
    $results = $sql3->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h5>View Courses</h5>
        </div>
        <div class="card-body">
            <?php require "../public/forms.php"?>

            <div class="table">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">S No</th>
                            <th scope="col">School</th>
                            <th scope="col">Course Abbr</th>
                            <th scope="col">Course Name</th>
                            <th scope="col">Date Created</th>
                            <th scope="col" colspan="2" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($results as $course){?>
                        <tr>
                            <th scope="row"><?php echo $course["id"]; ?></th>
                            <td><?php echo $course["school"]; ?></td>
                            <td><?php echo $course["short_name"]; ?></td>
                            <td><?php echo $course["full_name"]; ?></td>
                            <td><?php echo $course["date_created"]; ?></td>
                            <td><a href="" class="link-primary"> Edit</a></td>
                            <td><a href="" class="link-danger">Delete</a></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>           
        </div>
    </div>
</div>