<?php   
    require "../public/header.php";
?>

<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
            <div class="sidebar-header">
                <h3>School System</h3>
                <img src="images/avatar.png" alt="">
                <h5>Admin</h5>
            </div>

            <!--dashboard items-->
            <ul class="list-unstyled components">
                <!--COURSES-->
                <li class="active">
                    <a href="#courses" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Courses</a>
                    <ul class="collapse list-unstyled" id="courses">
                        <li>
                            <a href="addcourse.php">Add Courses</a>
                        </li>
                        <li>
                            <a href="viewcourse.php">View Courses</a>
                        </li>
                        <li>
                            <a href="managecourses.php">Manage Courses</a>
                        </li>
                    </ul>
                </li>
                <!--UNITS-->
                <li>
                    <a href="#subjects" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Units</a>
                    <ul class="collapse list-unstyled" id="subjects">
                        <li>
                            <a href="addunit.php">Add Units</a>
                        </li>
                        <li>
                            <a href="viewunits.php">View Units</a>
                        </li>
                        <li>
                            <a href="manageunits.php" >Manage unit</a>
                            
                        </li>
                    </ul>
                </li>
                <!--DEPARTMENTS-->
                <li>
                    <a href="#dpts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Departments</a>
                    <ul class="collapse list-unstyled" id="dpts">
                        <li>
                            <a href="adddept.php">Add Department</a>
                        </li>
                        <li>
                            <a href="viewdepts.php">View Departments</a>
                        </li>
                        <li>
                            <a href="managedepartment.php">Manage Departments</a>
                    
                        </li>
                    </ul>
                </li>
                <!--SCHOOLS-->
                <li>
                    <a href="#schools" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Schools</a>
                    <ul class="collapse list-unstyled" id="schools">
                        <li>
                            <a href="addschool.php">Add Schools</a>
                        </li>
                        <li>
                            <a href="viewschool.php">View Schools</a>
                        </li>
                        <li>
                            <a href="manageschools.php">Manage schools</a>
                            
                        </li>
                    </ul>
                </li>
                <!--REGISTER-->
                <li>
                    <a href="#students" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Students</a>
                    <ul class="collapse list-unstyled" id="students">
                        <li>
                            <a href="addstudent.php">Add new student</a>
                        </li>
                        <li>
                            <a href="viewstudents.php">View students</a>
                        </li>
                        <li>
                            <a href="managestudents.php" >Manage students</a>
                        
                        </li>
                    </ul>
                </li>
                <!--OTHERS-->
                <li>
                    <a href="login.php">Logout</a>
                </li>
            </ul>
    </nav>
    <!--sidebar toggle button-->
    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span>Toggle Sidebar</span>
                </button>
            </div>
            <h4>Welcome: <?php //echo $_SESSION["username"]?></h4>
        </nav>
        <hr>
        

    <!--</div>-->
<!--</div>-->

<?php require "../public/footer.php"?>