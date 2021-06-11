<?php 
    require "dashboard.php";
    //require "config.php";
    
    $sql8->execute();
    $results = $sql8->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="container">
    <div class="card">
        <div class="card-header">Add Department</div>
        <div class="card-body">
            <form action="config.php" method="POST">
                <div class="form-group row">
                    <label for="school" class="col-sm-2 col-form-label col-form-label">School</label>
                    <div class="col-sm-10">
                        <select name="school" id="" class="form-control form-control" required>
                            <option value="" selected disabled>Choose a school</option>
                            <?php foreach($results as $school){?>
                                <option value="<?php echo $school["school_name"];?>"><?php echo $school["school_name"]?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="dptname" class="col-sm-2 col-form-label col-form-label">Department Code</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control" placeholder="Department code" name="dptcode" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Department Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control" placeholder="" name="dptname" required>
                    </div>
                </div>
                <button class="btn btn-primary" name="adddept">Add Department</button>
            </form>
        </div>
    </div>
</div>