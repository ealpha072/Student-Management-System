<?php 
    require "dashboard.php";
    require "config.php";

    $sql13->execute();
    $results = $sql13->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h5>View Units</h5>
        </div>
        <div class="card-body">
            <?php require "../public/forms.php"?>

            <div class="table">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">S No</th>
                            <th scope="col">Reg No</th>
                            <th scope="col">School</th>
                            <th scope="col">Course</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($results as $student){?>
                        <tr>
                            <th scope="row"><?php echo $student["id"];?></th>
                            <th scope="row"><?php echo $student["reg_num"];?></th>
                            <td><?php echo $student["school"];?></td>
                            <td><?php echo $student["course"]; ?></td>
                            <td><?php echo $student["first_name"]; ?></td>
                            <td><?php echo $student["last_name"]; ?></td>
                            <td><?php echo $student["gender"]; ?></td>
                            <td><?php echo $student["phone_num"]; ?></td>
                            <td><?php echo $student["email"]; ?></td>

                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>           
        </div>
    </div>
</div>