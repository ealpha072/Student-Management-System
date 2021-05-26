<?php require "../public/header.php"; ?>

<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
            <div class="sidebar-header">
                <h3>School Management System</h3>
            </div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#courses" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Courses</a>
                    <ul class="collapse list-unstyled" id="courses">
                        <li>
                            <a href="addcourse.php">Add Courses</a>
                        </li>
                        <li>
                            <a href="viewcourse.php">View Courses</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#subjects" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Units</a>
                    <ul class="collapse list-unstyled" id="subjects">
                        <li>
                            <a href="addunit.php">Add Units</a>
                        </li>
                        <li>
                            <a href="viewunits.php">View Units</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Departments</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Add Department</a>
                        </li>
                        <li>
                            <a href="#">View Departments</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Register Student</a>
                </li>
                <li>
                    <a href="#">Contact</a>
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
            <h4>Welcome Admin</h4>
        </nav>
        <hr>
        

    <!--</div>-->
<!--</div>-->

<?php require "../public/footer.php"?>