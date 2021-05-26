<?php 
    require "dashboard.php";
    require "config.php";

    $sql8->execute();
    $results = $sql8->fetchAll(PDO::FETCH_ASSOC);
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
                            <th scope="col">Name of School</th>
                            <th scope="col">Date created</th>
                            <th scope="col" colspan="2" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($results as $school){?>
                        <tr>
                            <th scope="row"><?php echo $school["id"]; ?></th>
                            <td><?php echo $school["school_name"]; ?></td>
                            <td><?php echo $school["date_created"]; ?></td>
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