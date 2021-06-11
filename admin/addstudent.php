<?php 
    require "dashboard.php";
    require "config.php";

    $sql8->execute();
    $sql3->execute();

    $schools = $sql8->fetchAll(PDO::FETCH_ASSOC);
    $courses = $sql3->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h5>New Student</h5>
        </div>
        <div class="card-body">
            <form action="addstudent.php" method="post">

                <div class="card">
                    <div class="card-header">
                        <h5>Academic Info</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col">
                                <label for="school">School<sup>*</sup></label>
                                <select name="school" id="schoolselect" class="form-control" required onchange="populateCourse()">
                                    <option value="" selected disabled>Choose a school</option>
                                    <?php foreach($schools as $school){?>
                                        <option value="<?php echo $school["school_name"];?>"><?php echo $school["school_name"]?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col">
                                <label for="regnum">Course<sup>*</sup></label>
                                <div id="course-select">
                                    <select name="course" id="" class="form-control" required>
                                        <option value="" selected disabled>Choose a course</option>
                                        <?php foreach($courses as $course){?>
                                            <option value="<?php echo $course["full_name"];?>"><?php echo $course["full_name"]?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="regnum">Registration number<sup>*</sup></label>
                                <input type="text" name="regnum" class="form-control" placeholder="Reg No...">                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5>Personal Info</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col">
                                <label for="">Fist Name<sup>*</sup></label>
                                <input type="text" class="form-control" placeholder="First Name" required name="firstname">
                            </div>
                            <div class="col">
                                <label for="">Middle Name<sup>*</sup></label>
                                <input type="text" class="form-control" placeholder="Middle Name" required name="midname">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="">Last Name<sup>*</sup></label>
                                <input type="text" class="form-control" placeholder="Last Name" required name="lastname">                               
                            </div>
                            <div class="col">
                                <label for="gender">Gender<sup>*</sup></label>
                                <select name="gender" class="form-control" required>
                                    <option value="" selected disabled>Choose a gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="">Parent/Gurdian Name<sup>*</sup></label>
                                <input type="text" class="form-control" placeholder="Gurdian/Parent Name" required name="parent">  
                            </div>
                            <div class="col">
                                <label for="">Gurdian/Parent Occupation<sup>*</sup></label>
                                <input type="text" class="form-control" placeholder="Gurdian/Parent Occupation" required name="work">  
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="">Physically Challenged<sup>*</sup></label>
                                <select name="disability" id="" class="form-control" required>
                                    <option value="" selected disabled>Choose a disability</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>                                    
                                </select>
                            </div>
                            <div class="col">
                                <label for="" class="">Nationality<sup>*</sup></label>
                                <input type="text" class="form-control" placeholder="Nationality" required name="nationality">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5>Contact Info</h5>
                    </div>
                    <div class="card-body">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Mobile Number<sup>*</sup></label>
                                    <input type="number" placeholder="Phone Number" maxlength="10" minlength="10" class="form-control" required name="mobile">
                                </div>
                                <div class="col">
                                    <label for="">Email Address<sup>*</sup></label>
                                    <input type="email" placeholder="Email Address" class="form-control" required name="email">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label for="">ID Number<sup>*</sup></label>
                                    <input type="number" placeholder="Phone Number" maxlength="8" minlength="8" class="form-control" required name="idnumber" min="0">
                                </div>
                                <div class="col">
                                    <label for="">Physical Address<sup>*</sup></label>
                                    <input type="text" placeholder="P.O.BOX" class="form-control" required name="address">
                                </div>
                            </div>
                    </div>
                </div>
                <div>
                    <button class="btn btn-primary" name="register">Register Student</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="scripts/studentcoursereq.js"></script>