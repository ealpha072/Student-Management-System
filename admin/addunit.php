<?php 
    require "dashboard.php"; 
    require "config.php";

    $sql8->execute();
    $sql10->execute();
    $sql3->execute();

    $departments = $sql10->fetchAll(PDO::FETCH_ASSOC);
    $schools = $sql8->fetchAll(PDO::FETCH_ASSOC);
    $courses = $sql3->fetchAll(PDO::FETCH_ASSOC);
   
?>

<div class="container">
    <div class="card">
        <div class="card-header">Add Unit</div>
        <div class="card-body">
            <form action="addunit.php" method="POST">

                <div class="form-group row">
                    <label for="school" class="col-sm-2 col-form-label col-form-label">School</label>
                    <div class="col-sm-10">
                        <select name="school" id="schoolselect" class="form-control form-control" onchange="showUnit()">
                            <option value="" selected disabled>Choose a school</option>
                            <?php foreach($schools as $school){?>
                                <option value="<?php echo $school["school_name"];?>"><?php echo $school["school_name"]?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="departments" class="col-sm-2 col-form-label col-form-label">Departments</label>
                    <div class="col-sm-10" id="dptselect">
                        <select name="dpts" id="" class="form-control form-control">
                            <option value="" selected disabled>Choose a Department</option>                                                              
                            <?php 
                                
                                foreach($departments as $department){?>
                                <option value="<?php echo $department["name"];?>"><?php echo $department["name"]?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <!--
                <div class="form-group row">
                    <label for="course" class="col-sm-2 col-form-label col-form-label">Course</label>
                    <div class="col-sm-10">
                        <select name="courses" id="" class="form-control form-control">
                            <option value="" selected disabled>Choose a course</option>
                            <?php //foreach($courses as $course){?>
                                <option value="<?php //echo $course["full_name"];?>"><?php //echo $course["full_name"]?></option>
                            <?php //} ?>
                        </select>
                    </div>
                </div>-->

                <div class="form-group row">
                    <label for="unit title" class="col-sm-2 col-form-label col-form-label">Unit title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control" placeholder="Unit title" name="unit-title">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="unit name" class="col-sm-2 col-form-label col-form-label">Unit Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control" placeholder="Unit Name" name="unit-name">
                    </div>
                </div>
                <button class="btn btn-primary" name="addunit">Add Unit</button>
            </form>
        </div>
    </div>
</div>
<script src="scripts/unitprocess.js"></script>