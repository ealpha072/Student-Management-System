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
                            <a href="addcourse.php">Add Course</a>
                        </li>
                        <li>
                            <a href="#">View</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#subjects" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Subject</a>
                    <ul class="collapse list-unstyled" id="subjects">
                        <li>
                            <a href="#">Add Subject</a>
                        </li>
                        <li>
                            <a href="#">View subjects</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Portfolio</a>
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
        </nav>

    <!--</div>-->
<!--</div>-->

<?php require "../public/footer.php"?>