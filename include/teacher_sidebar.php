
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
                    <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Distribution</span></a>
                <ul class="submenu collapse">
                    <li><a class="nav-link" href="marks_distribution.php">Marks Distribution</a></li>
                    <li><a class="nav-link" href="show_distribution.php">Show Distribution </a></li>
                </ul>
            </li>
            <li class="nav-item has-submenu">
                <a href="running_course.php" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Running Course</span> </a>
            </li>
            <li class="nav-item has-submenu">
                <a href="assign_marks.php" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Assign Marks</span> </a>
            </li>
            <li class="nav-item has-submenu">
                <a href="attendance.php" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Attendance</span> </a>
            </li>
            <li class="nav-item has-submenu">
                <a href="change-password.php" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Change Password</span> </a>
            </li>
        </ul>
    </div>
</div>
<script>
    console.log(document.querySelectorAll('.sidebar .nav-link'))
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll('.sidebar .nav-link').forEach(function(element) {

            element.addEventListener('click', function(e) {
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
    });
</script>