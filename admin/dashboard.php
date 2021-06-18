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
                            <a href="#manage-course" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Manage Courses</a>
                            <ul class="collapse list-unstyled" id="manage-course">
                                <li>
                                    <a href="">Edit course details</a>
                                    <a href="">Delete Course</a>
                                </li>
                            </ul>
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
                            <a href="#manage-unit" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Manage unit</a>
                            <ul class="collapse list-unstyled" id="manage-unit">
                                <li>
                                    <a href="">Edit unit details</a>
                                    <a href="">Delete unit</a>
                                </li>
                            </ul>
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
                            <a href="#manage-dpt" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Manage Departments</a>
                            <ul class="collapse list-unstyled" id="manage-dpt">
                                <li>
                                    <a href="">Edit Department details</a>
                                    <a href="">Delete department</a>
                                </li>
                            </ul>
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
                            <a href="#manage-school" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Manage schools</a>
                            <ul class="collapse list-unstyled" id="manage-school">
                                <li>
                                    <a href="">Edit school details</a>
                                    <a href="">Delete school</a>
                                </li>
                            </ul>
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
                            <a href="#manage-student" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Manage students</a>
                            <ul class="collapse list-unstyled" id="manage-student">
                                <li>
                                    <a href="">Edit student details</a>
                                    <a href="">Delete student</a>
                                </li>
                            </ul>
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