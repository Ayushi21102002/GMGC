<ul class="sidebar navbar-nav">
	<li class="nav-item active">
		<a class="nav-link" onclick="window.location.href='http://localhost/AAA/admin/index.php'" ;>
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

			<a class="dropdown-item" onclick="window.location.href='http://localhost/AAA/admin/course/add-course.php'" ;>Add Courses</a>
			<div class="dropdown-divider"></div>
			<a class="dropdown-item" onclick="window.location.href='http://localhost/AAA/admin/course/manage-courses.php'" ;>Manage Courses</a>
		</div>
	</li>
	<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fas fa-fw fa fa-desktop"></i>
			<span>Branch</span>
		</a>
		<div class="dropdown-menu" aria-labelledby="pagesDropdown">

			<a class="dropdown-item" onclick="window.location.href='http://localhost/AAA/admin/branch/add-branch.php'" ;>Add Branch</a>
			<div class="dropdown-divider"></div>
			<a class="dropdown-item" onclick="window.location.href='http://localhost/AAA/admin/branch/manage-branch.php'" ;>Manage Branch</a>
		</div>
	</li>
	<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fas fa-fw fa-user"></i>
			<span>Branch Co-ordinator</span>
		</a>
		<div class="dropdown-menu" aria-labelledby="pagesDropdown" style="width: 200px; margin-left: 11px;">
			<a class="dropdown-item" onclick="window.location.href='http://localhost/AAA/admin/branch_co-ordinator/add_co-ordinator.php'" ;>Add Br. Co-ordinator</a>
			<div class="dropdown-divider"></div>
			<a class="dropdown-item" id="branch_co-ordinator" onclick="window.location.href='http://localhost/AAA/admin/branch_co-ordinator/manage_co-ordinator.php'" ;>Manage Br. Co-ordinator</a>
		</div>
	</li>
	<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fas fa-fw fa fa-info-circle"></i>
			<span>Admission Details</span>
		</a>
		<div class="dropdown-menu" aria-labelledby="pagesDropdown">
			<h6 class="dropdown-header">B.E.:</h6>
			<a class="dropdown-item" onclick="window.location.href='http://localhost/AAA/admin/inquiry/display/be_inquiry-students.php'" ;>View Record</a>
			<div class="dropdown-divider"></div>
			<h6 class="dropdown-header">D2D:</h6>
			<a class="dropdown-item" onclick="window.location.href='http://localhost/AAA/admin/inquiry/display/d2d_inquiry-students.php'" ;>View Record</a>
			<div class="dropdown-divider"></div>
			<h6 class="dropdown-header">Diploma:</h6>
			<a class="dropdown-item" onclick="window.location.href='http://localhost/AAA/admin/inquiry/display/d_inquiry-students.php'" ;>View Record</a>
			<div class="dropdown-divider"></div>
			<h6 class="dropdown-header">Pharmacy:</h6>
			<a class="dropdown-item" onclick="window.location.href='http://localhost/AAA/admin/inquiry/display/bpharm_inquiry-students.php'" ;>View Record</a>
			<div class="dropdown-divider"></div>
			<h6 class="dropdown-header">BSC:</h6>
			<a class="dropdown-item" onclick="window.location.href='http://localhost/AAA/admin/inquiry/display/bsc_inquiry-students.php'" ;>View Record</a>
			<div class="dropdown-divider"></div>
			<h6 class="dropdown-header">MCA:</h6>
			<a class="dropdown-item" onclick="window.location.href='http://localhost/AAA/admin/inquiry/display/mca_inquiry-students.php'" ;>View Record</a>
			<div class="dropdown-divider"></div>
			<h6 class="dropdown-header">PG:</h6>
			<a class="dropdown-item" onclick="window.location.href='http://localhost/AAA/admin/inquiry/display/pg_inquiry-students.php'" ;>View Record</a>
		</div>
	</li>

	<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fas fa-fw fa fa-user"></i>
			<span>Add student</span>
		</a>
		<div class="dropdown-menu" aria-labelledby="pagesDropdown">
			<h6 class="dropdown-header">B.E.:</h6>
			<a class="dropdown-item" onclick="window.location.href='http://localhost/AAA/admin/add_student/beregistration.php'" ;>Add Record</a>
			<div class="dropdown-divider"></div>
			<h6 class="dropdown-header">D2D:</h6>
			<a class="dropdown-item" href="#">Add Record</a>
			<div class="dropdown-divider"></div>
			<h6 class="dropdown-header">Diploma:</h6>
			<a class="dropdown-item" onclick="window.location.href='http://localhost/AAA/admin/add_student/diplomaregistration.php'" ;>Add Record</a>
			<div class="dropdown-divider"></div>
			<h6 class="dropdown-header">Pharmacy:</h6>
			<a class="dropdown-item" href="#">Add Record</a>
			<div class="dropdown-divider"></div>
			<h6 class="dropdown-header">BSC:</h6>
			<a class="dropdown-item" onclick="window.location.href='http://localhost/AAA/admin/add_student/bscregistration.php'" ;>Add Record</a>
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
			<a class="dropdown-item" onclick="window.location.href='http://localhost/AAA/admin/view_student/be_manage-students.php'" ;>View Record</a>
			<div class="dropdown-divider"></div>
			<h6 class="dropdown-header">D2D:</h6>
			<a class="dropdown-item" onclick="window.location.href='http://localhost/AAA/admin/view_student/d2d_manage-students.php'" ;>View Record</a>
			<div class="dropdown-divider"></div>
			<h6 class="dropdown-header">Diploma:</h6>
			<a class="dropdown-item" onclick="window.location.href='http://localhost/AAA/admin/view_student/d_manage-students.php'" ;>View Record</a>
			<div class="dropdown-divider"></div>
			<h6 class="dropdown-header">Pharmacy:</h6>
			<a class="dropdown-item" onclick="window.location.href='http://localhost/AAA/admin/view_student/bpharm_manage-students.php'" ;>View Record</a>
			<div class="dropdown-divider"></div>
			<h6 class="dropdown-header">BSC:</h6>
			<a class="dropdown-item" onclick="window.location.href='http://localhost/AAA/admin/view_student/bsc_manage-students.php'" ;>View Record</a>
			<div class="dropdown-divider"></div>
			<h6 class="dropdown-header">MCA:</h6>
			<a class="dropdown-item" onclick="window.location.href='http://localhost/AAA/admin/view_student/mca_manage-students.php'" ;>View Record</a>
			<div class="dropdown-divider"></div>
			<h6 class="dropdown-header">PG:</h6>
			<a class="dropdown-item" onclick="window.location.href='http://localhost/AAA/admin/view_student/pg_manage-students.php'" ;>View Record</a>
		</div>
	</li>

	<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fas fa-fw fa-fa fa-bookmark"></i>
			<span>Scholarship</span>
		</a>
		<div class="dropdown-menu" aria-labelledby="pagesDropdown">

			<a class="dropdown-item" onclick="window.location.href='http://localhost/AAA/admin/scholarship/mysy.php'" ;>MYSY</a>
			<div class="dropdown-divider"></div>

			<a class="dropdown-item" onclick="window.location.href='http://localhost/AAA/admin/scholarship/digital.php'" ;>Digital Gujarat</a>

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
	<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fas fa-fw fa-fa fa-book"></i>
			<span>Documents</span>
		</a>
		<div class="dropdown-menu" aria-labelledby="pagesDropdown">

			<a class="dropdown-item" onclick="window.location.href='http://localhost/AAA/admin/documents/provisional_ver_display.php'" ;>Provisional Verification</a>
			<div class="dropdown-divider"></div>
			<a class="dropdown-item" onclick="window.location.href='http://localhost/AAA/admin/documents/migration_cer_display.php'" ;>Migration Certificate</a>
			<div class="dropdown-divider"></div>
			<a class="dropdown-item" onclick="window.location.href='http://localhost/AAA/admin/documents/language_cer_display.php'" ;>Language Certificate</a>
			<div class="dropdown-divider"></div>
			<a class="dropdown-item" onclick="window.location.href='http://localhost/AAA/admin/documents/duplicatemarksheet_dis.php'" ;>Duplicate Grade Sheet</a>
			<div class="dropdown-divider"></div>
			<a class="dropdown-item" onclick="window.location.href='http://localhost/AAA/admin/documents/cgpatoper_dis.php'" ;>CGPA to Percentage</a>
			<div class="dropdown-divider"></div>
			<a class="dropdown-item" onclick="window.location.href='http://localhost/AAA/admin/documents/attempt_dis.php'" ;>Attempt Certificate</a>
			<div class="dropdown-divider"></div>
			<a class="dropdown-item" onclick="window.location.href='http://localhost/AAA/admin/documents/fees_structure_display.php'" ;>Fees Structure</a>
			<div class="dropdown-divider"></div>
			<a class="dropdown-item"  onclick="window.location.href='http://localhost/AAA/admin/documents/bonafide_dis.php'" ;>Bonafide Certificate</a>
	</li>
	<li class="nav-item dropdown">
		<a class="nav-link dropdown" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-richtext-fill" viewBox="0 0 16 16">
				<path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM7 4.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm-.861 1.542 1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047l1.888.974V7.5a.5.5 0 0 1-.5.5H5a.5.5 0 0 1-.5-.5V7s1.54-1.274 1.639-1.208zM5 9h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z" />
			</svg>
			<i class="bi bi-file-richtext-fill"></i>
			<span onclick="window.location.href='http://localhost/AAA/admin/document_report/document_report.php'" ;>Document Report</span>
		</a>
	</li>

</ul>