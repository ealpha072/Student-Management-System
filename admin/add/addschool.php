<?php require "dashboard.php";?>

<div class="container">
    <div class="card">
        <div class="card-header">Add Course</div>
        <div class="card-body">
            <form action="config.php" method="POST">
                <div class="form-group row">
                    <label for="school" class="col-sm-2 col-form-label col-form-label">Name of School</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control"  placeholder="School of ..." name="schoolname">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Creation Date</label>
                    <div class="col-sm-10">
                        <input type="" class="form-control form-control" id="colFormLabel" placeholder="<?php echo date('l\, F jS\, Y '); ?>" readonly name="datecreated">
                    </div>
                </div>
                <button class="btn btn-primary" name="addschool">Add School</button>
            </form>
        </div>
    </div>
</div>