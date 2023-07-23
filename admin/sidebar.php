		<!-- Sidebar -->
		<ul class="sidebar navbar-nav">
		    <li class="nav-item active">
		        <a class="nav-link" href="./index.php">
		            <i class="fas fa-fw fa-tachometer-alt"></i>
		            <span>Dashboard</span>
		        </a>
		    </li>
		    <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		            <i class="fas fa-fw fa-folder"></i>
		            <span>Courses</span>
		        </a>
		        <div class="dropdown-menu" aria-labelledby="pagesDropdown">

		            <a class="dropdown-item" href="./course/add-course.php">Add Courses</a>
		            <div class="dropdown-divider"></div>
		            <a class="dropdown-item" href="./course/manage-courses.php">Manage Courses</a>
		        </div>
		    </li>
		    <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		            <i class="fas fa-fw fa fa-desktop"></i>
		            <span>Branch</span>
		        </a>
		        <div class="dropdown-menu" aria-labelledby="pagesDropdown">

		            <a class="dropdown-item" href="./branch/add-branch.php">Add Branch</a>
		            <div class="dropdown-divider"></div>
		            <a class="dropdown-item" href="./branch/manage-branch.php">Manage Branch</a>
		        </div>
		    </li>
		    <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		            <i class="fas fa-fw fa-user"></i>
		            <span>Branch Co-ordinator</span>
		        </a>
		        <div class="dropdown-menu" aria-labelledby="pagesDropdown" style="width: 200px; margin-left: 11px;">
		            <a class="dropdown-item" href="./branch_co-ordinator/add_co-ordinator.php">Add Br. Co-ordinator</a>
		            <div class="dropdown-divider"></div>
		            <a class="dropdown-item" id="branch_co-ordinator" href="./branch_co-ordinator/manage_co-ordinator.php">Manage Br. Co-ordinator</a>
		        </div>
		    </li>
		    <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		            <i class="fas fa-fw fa fa-info-circle"></i>
		            <span>Admission Details</span>
		        </a>
		        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
		            <h6 class="dropdown-header">B.E.:</h6>
		            <a class="dropdown-item" href="./inquiry/display/be_inquiry-students.php">View Record</a>
		            <div class="dropdown-divider"></div>
		            <h6 class="dropdown-header">D2D:</h6>
		            <a class="dropdown-item" href="./inquiry/display/d2d_inquiry-students.php">View Record</a>
		            <div class="dropdown-divider"></div>
		            <h6 class="dropdown-header">Diploma:</h6>
		            <a class="dropdown-item" href="./inquiry/display/d_inquiry-students.php">View Record</a>
		            <div class="dropdown-divider"></div>
		            <h6 class="dropdown-header">Pharmacy:</h6>
		            <a class="dropdown-item" href="./inquiry/display/bpharm_inquiry-students.php">View Record</a>
		            <div class="dropdown-divider"></div>
		            <h6 class="dropdown-header">BSC:</h6>
		            <a class="dropdown-item" href="./inquiry/display/bsc_inquiry-students.php">View Record</a>
		            <div class="dropdown-divider"></div>
		            <h6 class="dropdown-header">MCA:</h6>
		            <a class="dropdown-item" href="./inquiry/display/mca_inquiry-students.php">View Record</a>
		            <div class="dropdown-divider"></div>
		            <h6 class="dropdown-header">PG:</h6>
		            <a class="dropdown-item" href="./inquiry/display/pg_inquiry-students.php">View Record</a>
		        </div>
		    </li>

		    <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		            <i class="fas fa-fw fa fa-user"></i>
		            <span>Add student</span>
		        </a>
		        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
		            <h6 class="dropdown-header">B.E.:</h6>
		            <a class="dropdown-item" href="./add_student/beregistration.php">Add Record</a>
		            <div class="dropdown-divider"></div>
		            <h6 class="dropdown-header">D2D:</h6>
		            <a class="dropdown-item" href="#">Add Record</a>
		            <div class="dropdown-divider"></div>
		            <h6 class="dropdown-header">Diploma:</h6>
		            <a class="dropdown-item" href="./add_student/diplomaregistration.php">Add Record</a>
		            <div class="dropdown-divider"></div>
		            <h6 class="dropdown-header">Pharmacy:</h6>
		            <a class="dropdown-item" href="#">Add Record</a>
		            <div class="dropdown-divider"></div>
		            <h6 class="dropdown-header">BSC:</h6>
		            <a class="dropdown-item" href="./add_student/bscregistration.php">Add Record</a>
		            <div class="dropdown-divider"></div>
		            <h6 class="dropdown-header">MCA:</h6>
		            <a class="dropdown-item" href="#">Add Record</a>
		            <div class="dropdown-divider"></div>
		            <h6 class="dropdown-header">PG:</h6>
		            <a class="dropdown-item" href="#">Add Record</a>
		        </div>
		    </li>

		    <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		            <i class="fas fa-fw fa fa-eye"></i>
		            <span>View student</span>
		        </a>
		        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
		            <h6 class="dropdown-header">B.E.:</h6>
		            <a class="dropdown-item" href="./view_student/be_manage-students.php">View Record</a>
		            <div class="dropdown-divider"></div>
		            <h6 class="dropdown-header">D2D:</h6>
		            <a class="dropdown-item" href="./view_student/d2d_manage-students.php">View Record</a>
		            <div class="dropdown-divider"></div>
		            <h6 class="dropdown-header">Diploma:</h6>
		            <a class="dropdown-item" href="./view_student/d_manage-students.php">View Record</a>
		            <div class="dropdown-divider"></div>
		            <h6 class="dropdown-header">Pharmacy:</h6>
		            <a class="dropdown-item" href="./view_student/bpharm_manage-students.php">View Record</a>
		            <div class="dropdown-divider"></div>
		            <h6 class="dropdown-header">BSC:</h6>
		            <a class="dropdown-item" href="./view_student/bsc_manage-students.php">View Record</a>
		            <div class="dropdown-divider"></div>
		            <h6 class="dropdown-header">MCA:</h6>
		            <a class="dropdown-item" href="./view_student/mca_manage-students.php">View Record</a>
		            <div class="dropdown-divider"></div>
		            <h6 class="dropdown-header">PG:</h6>
		            <a class="dropdown-item" href="./view_student/pg_manage-students.php">View Record</a>
		        </div>
		    </li>

		    <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		            <i class="fas fa-fw fa-fa fa-bookmark"></i>
		            <span>Scholarship</span>
		        </a>
		        <div class="dropdown-menu" aria-labelledby="pagesDropdown">

		            <a class="dropdown-item" href="./scholarship/mysy.php">MYSY</a>
		            <div class="dropdown-divider"></div>

		            <a class="dropdown-item" href="./scholarship/digital.php">Digital Gujarat</a>

		    </li>
		    <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		            <i class="fas fa-fw fa-fa fa-list-alt"></i>
		            <span>Result</span>
		        </a>
		        <div class="dropdown-menu" aria-labelledby="pagesDropdown">

		            <a class="dropdown-item" href="manage-students.php">Upload Data</a>
		            <div class="dropdown-divider"></div>
		            <a class="dropdown-item" href="404.html">Enter issue date</a>
		            <div class="dropdown-divider"></div>
		            <a class="dropdown-item" href="manage-students.php">View Result Record</a>
		    </li>
		    <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		            <i class="fas fa-fw fa-fa fa-users"></i>
		            <span>Fees</span>
		        </a>
		        <div class="dropdown-menu" aria-labelledby="pagesDropdown">

		            <a class="dropdown-item" href="manage-students.php">Add Fees</a>
		            <div class="dropdown-divider"></div>
		            <a class="dropdown-item" href="404.html">Enter dates here</a>
		            <div class="dropdown-divider"></div>
		            <a class="dropdown-item" href="manage-students.php">View Fees Record</a>
		    </li>
		    <li class="nav-item">
		        <a class="nav-link" href="charts.html">
		            <i class="fas fa-fw fa-fa fa-book"></i>
		            <span>Documents</span></a>
		    </li>
		</ul>