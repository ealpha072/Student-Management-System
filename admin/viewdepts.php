<?php 
    require "dashboard.php";
    require "config.php";
    //executions
    $sql8->execute();
    $sql10->execute();
    //results
    $results = $sql10->fetchAll(PDO::FETCH_ASSOC);
    $schools = $sql8->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h5>View Departments</h5>
        </div>
        <div class="card-body">
            
            <div class="form">
                <div class="limit" style="float: right;">
                    <form action="" class="form-inline">
                        <div class="form-group">
                            <label for="inputPassword6">Show
                                <input type="number" class="form-control mx-sm-3" min="1" max="<?php echo count($results)?>">entries
                            </label>
                        </div>
                    </form>
                </div>
                
                <div class="search" style="float:left">
                    <select name="school" id="schooloption" class="form-control" onchange="showDepartment()">
                        <option value="" selected disabled>View by school</option>
						<?php foreach($schools as $school){?>
						<option value="<?php echo $school["school_name"];?>"><?php echo $school["school_name"];?></option>
						<?php }?>
                    </select>
                </div>                
            </div>

            <div class="table" id="depttable">
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
<script src="scripts/jqdept.js"></script>