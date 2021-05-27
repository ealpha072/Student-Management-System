<?php 
    require "dashboard.php";
    require "config.php";

    $sql10->execute();
    $results = $sql10->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h5>View Departments</h5>
        </div>
        <div class="card-body">
            <?php require "../public/forms.php"?>

            <div class="table">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">S No</th>
                            <th scope="col">School</th>
                            <th scope="col">Code</th>
                            <th scope="col">Department Name</th>
                            <th scope="col" colspan="2" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($results as $dpt){?>
                        <tr>
                            <th scope="row"><?php echo $dpt["id"]; ?></th>
                            <td><?php echo $dpt["school"]; ?></td>
                            <td><?php echo $dpt["dpt_abbr"]; ?></td>
                            <td><?php echo $dpt["name"]; ?></td>
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