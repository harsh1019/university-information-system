<!-- <aside>
    
<div class="flex-shrink-0 p-3 bg-dark" style="width: 280px;">
        <ul class="list-unstyled ps-0">
            <li class="active">
                <a class="" href="dashboard.php">
                    <i class="icon_house_alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_documents_alt"></i>
                    <span>Creation</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                <li><a class="" href="course.php">course</a></li>
                <li><a class="" href="teacher.php">teacher</a></li>
                <li><a class="" href="student.php">student</a></li>
                <li><a class="" href="section.php">section</a></li>
                <li><a class="" href="session.php">session</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_documents_alt"></i>
                    <span>Inventory</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                <li><a class="" href="add_inventory.php">Add</a></li>
                <li><a class="" href="view_inventory.php">View</a></li>
            </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_documents_alt"></i>
                    <span>Manage</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                <li><a class="" href="manage_sessions.php">Sessions</a></li>
                <li><a class="" href="manage_enrollment_status.php">Enrollment status</a></li>
                <li><a class="" href="manage_student_enrollment.php">Student Enrollment</a></li>
            </ul>
            </li>
            <li>
                <a class="" href="teacher_assign.php">
                    <i class="icon_document_alt"></i>
                    <span>Teacher Assign</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_desktop"></i>
                    <span>Preview</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                <li><a class="" href="course-table.php">All courses</a></li>
                <li><a class="" href="teacher-table.php">All teachers</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_documents_alt"></i>
                    <span>Tables</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                <li><a class="" href="table_teacher.php">Teacher</a></li>
                <li><a class="" href="table_student.php">Student</a></li>
                <li><a class="" href="table_course.php">Course</a></li>
                <li><a class="" href="table_section.php">Section</a></li>
            </ul>
            </li>
        </ul>
    </div>
 

</aside> -->



<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 sidebar">
        <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-5 d-none d-sm-inline">Menu</span>
        </a>
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li>
                <a href="dashboard.php" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
            </li>
            <li class="nav-item has-submenu">
                <a href="#" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Creation</span></a>
                <ul class="submenu collapse">
                    <li><a class="nav-link" href="course.php">Course</a></li>
                    <li><a class="nav-link" href="teacher.php">Instructor </a></li>
                    <li><a class="nav-link" href="student.php">Student </a> </li>
                    <li><a class="nav-link" href="section.php">Section </a> </li>
                    <li><a class="nav-link" href="session.php">Session </a> </li>
                </ul>
            </li>
            <li class="nav-item has-submenu">
                <a href="#" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Inventory</span> </a>
                <ul class="collapse  submenu">
                    <li class="w-100">
                        <a href="add_inventory.php" class="nav-link px-0"> Add</a>
                    </li>
                    <li>
                        <a href="view_inventory.php" class="nav-link px-0"> View</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-submenu">
                <a href="#" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Grants</span> </a>
                <ul class="collapse  submenu">
                    <li class="w-100">
                        <a href="#" class="nav-link px-0"> Add</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0"> View</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-submenu">
                <a href="#" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Manage</span> </a>
                <ul class="submenu collapse">
                    <li><a class="nav-link" href="manage_sessions.php">Session</a></li>
                    <li><a class="nav-link" href="manage_enrollment_status.php">Enrollement Status </a></li>
                    <li><a class="nav-link" href="manage_student_enrollment.php">Student Enrollment</a> </li>
                </ul>
            </li>
            <li class="nav-item has-submenu">
                <a href="teacher_assign.php" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Instructor Assign</span> </a>
            </li>
            <li class="nav-item has-submenu">
                <a href="#" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Preview</span> </a>
                <ul class="submenu collapse">
                    <li><a class="nav-link" href="course-table.php">All Courses</a></li>
                    <li><a class="nav-link" href="teacher-table.php">All Instructor</a></li>
                </ul>
            </li>
            <li class="nav-item has-submenu">
                <a href="#" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Tables</span> </a>
                <ul class="submenu collapse">
                    <li><a class="nav-link" href="table_teacher.php">Instructor</a></li>
                    <li><a class="nav-link" href="table_student.php">Student</a></li>
                    <li><a class="nav-link" href="table_course.php">Course</a> </li>
                    <li><a class="nav-link" href="table_section.php">Section</a> </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<script>
    console.log(document.querySelectorAll('.sidebar .nav-link'))
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll('.sidebar .nav-link').forEach(function (element) {

            element.addEventListener('click', function (e) {
                console.log(e, "toggled")
                let nextEl = element.nextElementSibling;
                let parentEl = element.parentElement;

                if (nextEl) {
                    e.preventDefault();
                    let mycollapse = new bootstrap.Collapse(nextEl);

                    if (nextEl.classList.contains('show')) {
                        mycollapse.hide();
                    } else {
                        mycollapse.show();
                        // find other submenus with class=show
                        var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                        // if it exists, then close all of them
                        if (opened_submenu) {
                            new bootstrap.Collapse(opened_submenu);
                        }
                    }
                }
            }); // addEventListener
        }) // forEach
    }); </script>