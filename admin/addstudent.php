<?php 
    require "dashboard.php";
    require "config.php";

?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h5>New Student</h5>
        </div>
        <div class="card-body">
            <form action="" method="post">

                <div class="card">
                    <div class="card-header">
                        <h5>Academic Info</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col">
                                <select name="school" id="" class="form-control" required>
                                    <option value="" selected>Choose a school</option>
                                </select>
                            </div>
                            <div class="col">
                                <select name="school" id="" class="form-control" required>
                                    <option value="" selected>Choose a course</option>
                                </select>
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
                                <label for="">Fist Name</label>
                                <input type="text" class="form-control" placeholder="First Name" required name="firstname">
                            </div>
                            <div class="col">
                                <label for="">Middle Name</label>
                                <input type="text" class="form-control" placeholder="Middle Name" required name="midname">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="">Last Name</label>
                                <input type="text" class="form-control" placeholder="Last Name" required name="lastname">                               
                            </div>
                            <div class="col">
                                <label for="gender">Gender</label>
                                <select name="gender" class="form-control" required>
                                    <option value="" selected>Choose a gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="">Parent/Gurdian Name</label>
                                <input type="text" class="form-control" placeholder="Gurdian/Parent Name" required name="parent">  
                            </div>
                            <div class="col">
                                <label for="">Gurdian/Parent Occupation</label>
                                <input type="text" class="form-control" placeholder="Gurdian/Parent Occupation" required name="work">  
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="">Physically Challenged</label>
                                <select name="disability" id="" class="form-control" required>
                                    <option value="" selected>Choose a disability</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>                                    
                                </select>
                            </div>
                            <div class="col">
                                <label for="" class="">Nationality</label>
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
                                    <label for="">Mobile Number</label>
                                    <input type="number" placeholder="Phone Number" maxlength="10" minlength="10" class="form-control" required name="mobile">
                                </div>
                                <div class="col">
                                    <label for="">Email Address</label>
                                    <input type="email" placeholder="Email Address" class="form-control" required name="email">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label for="">ID Number</label>
                                    <input type="number" placeholder="Phone Number" maxlength="8" minlength="8" class="form-control" required name="idnumber">
                                </div>
                                <div class="col">
                                    <label for="">Physical Address</label>
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