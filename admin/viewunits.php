<?php 
    require "dashboard.php";
    require "config.php";

    $sql6->execute();
    $results = $sql6->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h5>View Units</h5>
        </div>
        <div class="card-body">
            <div class="form">
                <div class="limit" style="float: left;">
                    <form action="" class="form-inline">
                        <div class="form-group">
                            <label for="inputPassword6">Show
                                <input type="number" class="form-control mx-sm-3" min="1" max="<?php echo count($results)?>">entries
                            </label>
                        </div>
                    </form>
                </div>
                
                <div class="search" style="float:right">
                    <form class="form-inline" action="">
                        <div class="form-group">
                            <label for="inputPassword6">Search</label>
                            <input type="text" id="search" class="form-control mx-sm-3">
                        </div>
                    </form>
                </div>                
            </div>

            <div class="table">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">S No</th>
                            <th scope="col">Unit Code</th>
                            <th scope="col">Unit title</th>
                            <th scope="col" colspan="2" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($results as $unit){?>
                        <tr>
                            <th scope="row"><?php echo $unit["id"]; ?></th>
                            <td><?php echo $unit["unit_title"]; ?></td>
                            <td><?php echo $unit["unit_name"]; ?></td>
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