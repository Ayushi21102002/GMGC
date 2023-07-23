<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();

if (isset($_POST['update'])) {
	$a = $_POST['stu_adm_year'];
	$b = $_POST['stu_adm_batch'];
	$c = strtoupper($_POST['stu_branch']);
	$d = strtoupper($_POST['stu_roll']);
	$e = $_POST['stu_enrollment'];
	$f = strtoupper($_POST['stu_fname']);
	$g = strtoupper($_POST['stu_mname']);
	$h = strtoupper($_POST['stu_lname']);
	$i = strtoupper($_POST['stu_gender']);
	$j = $_POST['stu_bdate'];
	$k = $_POST['stu_age'];
	$l = strtoupper($_POST['stu_category']);
	$m = strtoupper($_POST['stu_ad_category']);
	$n = strtoupper($_POST['stu_add_type']);
	$o = strtoupper($_POST['stu_acpc_adm_seat']);
	$p = strtoupper($_POST['stu_gujcet_roll_no']);
	$q = $_POST['stu_acpc_merit_rank'];
	$r = strtoupper($_POST['stu_temp_add']);
	$s = strtoupper($_POST['stu_temp_city']);
	$t = strtoupper($_POST['stu_temp_state']);
	$u = strtoupper($_POST['stu_temp_pincode']);
	$v = strtoupper($_POST['stu_per_add']);
	$w = strtoupper($_POST['stu_per_city']);
	$x = strtoupper($_POST['stu_per_state']);
	$y = strtoupper($_POST['stu_per_pincode']);
	$z = $_POST['stu_parents_phone'];
	$aa = $_POST['stu_phone'];
	$ab = strtoupper($_POST['stu_father_edu']);
	$ac = strtoupper($_POST['stu_father_occu']);
	$ad = strtoupper($_POST['stu_mother_edu']);
	$ae = strtoupper($_POST['stu_mother_occu']);
	$af = strtoupper($_POST['stu_brother_edu']);
	$ag = strtoupper($_POST['stu_brother_occu']);
	$ah = strtoupper($_POST['stu_sister_edu']);
	$ai = strtoupper($_POST['stu_sister_occu']);
	$aj = $_POST['stu_email'];
	$ak = $_POST['stu_phy_mark'];
	$al = $_POST['stu_che_mark'];
	$am = $_POST['stu_maths_mark'];
	$an = strtoupper($_POST['stu_12th_medium']);
	$ao = $_POST['stu_dip_CGPA'];
	$ap = $_POST['stu_barcode'];
	$aq = $_POST['stu_mem_code'];

	//$folder = $Stu_Student_Enrollment_No;
	//$folder = mkdir("..\student-images/".$e);
	$path = "../student-images/";
	//rename($Stu_Roll_No,$Stu_Student_Enrollment_No);
	//exit;
	$Stu_img = $_FILES['stu_image']['name'];
	$Stu_img_tmp = $_FILES['stu_image']['tmp_name'];
	if ($c == "CIVIL ENGINEERING") {

		if ($Stu_img == '') {
			$upd = "update civil_student_detail set Stu_Year_of_Admission='$a',Stu_Batch='$b',Stu_Branch='$c',Stu_Roll_No='$d',Stu_Student_Enrollment_No='$e',Stu_Firstname='$f',Stu_Middlename='$g',Stu_Lastname='$h',Stu_gender='$i',Stu_Birth_Date='$j',Stu_Age='$k',Stu_Category='$l',Stu_Admission_Category='$m',Stu_Admission_Type='$n',Stu_ACPC_Admitted_Seat='$o',Stu_GUJCET_Roll_No='$p',Stu_ACPC_Merit_Rank='$q',Stu_Temporary_Address='$r',Stu_Temp_City='$s',Stu_Temp_Sate='$t',Stu_Temp_Pincode='$u',Stu_Permanent_Address='$v',Stu_Per_City='$w',Stu_Per_State='$x',Stu_Per_Pincode='$y',Stu_Parents_Phone_No='$z'
		,Stu_Student_Phone_No='$aa',Stu_Father_Edu='$ab',Stu_Father_Occu='$ac',Stu_Mother_Edu='$ad',Stu_Mother_Occu='$ae',Stu_Brother_Edu='$af',Stu_Brother_Occu='$ag',Stu_Sister_Edu='$ah',Stu_Sister_Occu='$ai',Stu_Email='$aj',Stu_Physics='$ak',Stu_Chemistry='$al',Stu_Maths='$am',Stu_12th_medium='$an',Stu_Diploma_CGPA='$ao',Stu_Barcode='$ap',Stu_Membar_Code='$aq' where Stu_Student_Enrollment_No='$e'";
		} else {
			//$upd = "update smd_student_detail set Stu_Year_of_Admission='$Stu_Year_of_Admission',Stu_Batch='$Stu_Batch',Stu_Branch='$Stu_Branch',Stu_Roll_No='$Stu_Roll_No',Stu_Student_Enrollment_No='$Stu_Student_Enrollment_No',Stu_Firstname='$Stu_Firstname',Stu_Middlename='$Stu_Middlename',Stu_Lastname='$Stu_Lastname',Stu_gender='$Stu_Gender',Stu_Birth_Date='$Stu_Birth_Date',stu_age='$Stu_Age',Stu_Category='$Stu_Category',Stu_Admission_Category='$Stu_Admission_Category',Stu_Admission_Type='$Stu_Admission_Type',Stu_ACPC_Admitted_Seat='$Stu_ACPC_Admitted_Seat',Stu_GUJCET_Roll_No='$Stu_GUJCET_Roll_No',Stu_ACPC_Merit_Rank='$Stu_ACPC_Merit_Rank',Stu_Permanent_Address='$Stu_Permanent_Address',Stu_Temporary_Address='$Stu_Temporary_Address',Stu_City='$Stu_City',Stu_Pincode='$Stu_Pincode',Stu_Parents_Phone_No='$Stu_Parents_Phone_No',Stu_Student_Phone_No='$Stu_Student_Phone_No',father_education='$Fat_edu',father_occupation='$Fat_occu',mother_education='$Mon_edu',mother_occupation='$Mon_occu',brother_education='$Bro_edu',brother_occupation='$Bro_occu',sis_education='$Mon_edu',sis_occupation='$Mon_occu',Stu_Guardians_Phone_No='$Stu_Guardians_Phone_No',Stu_Telephone_No='$Stu_Telephone_No',Stu_Email='$Stu_Email',Stu_Physics='$Stu_Physics',Stu_Chemistry='$Stu_Chemistry',Stu_Maths='$Stu_Maths',stu_percentage='$Stu_per',stu_medium='$Stu_med',Stu_Diploma_CGPA='$Stu_Diploma_CGPA',Stu_Barcode='$Stu_Barcode',Stu_Membar_Code='$Stu_Member_code' where Stu_Student_Enrollment_No='$enno'";

			$upd = "update civil_student_detail set Stu_Year_of_Admission='$a',Stu_Batch='$b',Stu_Branch='$c',Stu_Roll_No='$d',Stu_Student_Enrollment_No='$e',Stu_Profile_pic='$e',Stu_Firstname='$f',Stu_Middlename='$g',Stu_Lastname='$h',Stu_gender='$i',Stu_Birth_Date='$j',Stu_Age='$k',Stu_Category='$l',Stu_Admission_Category='$m',Stu_Admission_Type='$n',Stu_ACPC_Admitted_Seat='$o',Stu_GUJCET_Roll_No='$p',Stu_ACPC_Merit_Rank='$q',Stu_Temporary_Address='$r',Stu_Temp_City='$s',Stu_Temp_Sate='$t',Stu_Temp_Pincode='$u',Stu_Permanent_Address='$v',Stu_Per_City='$w',Stu_Per_State='$x',Stu_Per_Pincode='$y',Stu_Parents_Phone_No='$z'
			,Stu_Student_Phone_No='$aa',Stu_Father_Edu='$ab',Stu_Father_Occu='$ac',Stu_Mother_Edu='$ad',Stu_Mother_Occu='$ae',Stu_Brother_Edu='$af',Stu_Brother_Occu='$ag',Stu_Sister_Edu='$ah',Stu_Sister_Occu='$ai',Stu_Email='$aj',Stu_Physics='$ak',Stu_Chemistry='$al',Stu_Maths='$am',Stu_12th_medium='$an',Stu_Diploma_CGPA='$ao',Stu_Barcode='$ap',Stu_Membar_Code='$aq' where Stu_Student_Enrollment_No='$e'";
			move_uploaded_file($Stu_img_tmp, "../student-images/" . $e . ".jpg");
		}
	} elseif ($c == "COMPUTER ENGINEERING") {

		if ($Stu_img == '') {
			$upd = "update ce_student_detail set Stu_Year_of_Admission='$a',Stu_Batch='$b',Stu_Branch='$c',Stu_Roll_No='$d',Stu_Student_Enrollment_No='$e',Stu_Firstname='$f',Stu_Middlename='$g',Stu_Lastname='$h',Stu_gender='$i',Stu_Birth_Date='$j',Stu_Age='$k',Stu_Category='$l',Stu_Admission_Category='$m',Stu_Admission_Type='$n',Stu_ACPC_Admitted_Seat='$o',Stu_GUJCET_Roll_No='$p',Stu_ACPC_Merit_Rank='$q',Stu_Temporary_Address='$r',Stu_Temp_City='$s',Stu_Temp_Sate='$t',Stu_Temp_Pincode='$u',Stu_Permanent_Address='$v',Stu_Per_City='$w',Stu_Per_State='$x',Stu_Per_Pincode='$y',Stu_Parents_Phone_No='$z'
		,Stu_Student_Phone_No='$aa',Stu_Father_Edu='$ab',Stu_Father_Occu='$ac',Stu_Mother_Edu='$ad',Stu_Mother_Occu='$ae',Stu_Brother_Edu='$af',Stu_Brother_Occu='$ag',Stu_Sister_Edu='$ah',Stu_Sister_Occu='$ai',Stu_Email='$aj',Stu_Physics='$ak',Stu_Chemistry='$al',Stu_Maths='$am',Stu_12th_medium='$an',Stu_Diploma_CGPA='$ao',Stu_Barcode='$ap',Stu_Membar_Code='$aq' where Stu_Student_Enrollment_No='$e'";
		} else {
			//$upd = "update smd_student_detail set Stu_Year_of_Admission='$Stu_Year_of_Admission',Stu_Batch='$Stu_Batch',Stu_Branch='$Stu_Branch',Stu_Roll_No='$Stu_Roll_No',Stu_Student_Enrollment_No='$Stu_Student_Enrollment_No',Stu_Firstname='$Stu_Firstname',Stu_Middlename='$Stu_Middlename',Stu_Lastname='$Stu_Lastname',Stu_gender='$Stu_Gender',Stu_Birth_Date='$Stu_Birth_Date',stu_age='$Stu_Age',Stu_Category='$Stu_Category',Stu_Admission_Category='$Stu_Admission_Category',Stu_Admission_Type='$Stu_Admission_Type',Stu_ACPC_Admitted_Seat='$Stu_ACPC_Admitted_Seat',Stu_GUJCET_Roll_No='$Stu_GUJCET_Roll_No',Stu_ACPC_Merit_Rank='$Stu_ACPC_Merit_Rank',Stu_Permanent_Address='$Stu_Permanent_Address',Stu_Temporary_Address='$Stu_Temporary_Address',Stu_City='$Stu_City',Stu_Pincode='$Stu_Pincode',Stu_Parents_Phone_No='$Stu_Parents_Phone_No',Stu_Student_Phone_No='$Stu_Student_Phone_No',father_education='$Fat_edu',father_occupation='$Fat_occu',mother_education='$Mon_edu',mother_occupation='$Mon_occu',brother_education='$Bro_edu',brother_occupation='$Bro_occu',sis_education='$Mon_edu',sis_occupation='$Mon_occu',Stu_Guardians_Phone_No='$Stu_Guardians_Phone_No',Stu_Telephone_No='$Stu_Telephone_No',Stu_Email='$Stu_Email',Stu_Physics='$Stu_Physics',Stu_Chemistry='$Stu_Chemistry',Stu_Maths='$Stu_Maths',stu_percentage='$Stu_per',stu_medium='$Stu_med',Stu_Diploma_CGPA='$Stu_Diploma_CGPA',Stu_Barcode='$Stu_Barcode',Stu_Membar_Code='$Stu_Member_code' where Stu_Student_Enrollment_No='$enno'";

			$upd = "update ce_student_detail set Stu_Year_of_Admission='$a',Stu_Batch='$b',Stu_Branch='$c',Stu_Roll_No='$d',Stu_Student_Enrollment_No='$e',Stu_Profile_pic='$e',Stu_Firstname='$f',Stu_Middlename='$g',Stu_Lastname='$h',Stu_gender='$i',Stu_Birth_Date='$j',Stu_Age='$k',Stu_Category='$l',Stu_Admission_Category='$m',Stu_Admission_Type='$n',Stu_ACPC_Admitted_Seat='$o',Stu_GUJCET_Roll_No='$p',Stu_ACPC_Merit_Rank='$q',Stu_Temporary_Address='$r',Stu_Temp_City='$s',Stu_Temp_Sate='$t',Stu_Temp_Pincode='$u',Stu_Permanent_Address='$v',Stu_Per_City='$w',Stu_Per_State='$x',Stu_Per_Pincode='$y',Stu_Parents_Phone_No='$z'
			,Stu_Student_Phone_No='$aa',Stu_Father_Edu='$ab',Stu_Father_Occu='$ac',Stu_Mother_Edu='$ad',Stu_Mother_Occu='$ae',Stu_Brother_Edu='$af',Stu_Brother_Occu='$ag',Stu_Sister_Edu='$ah',Stu_Sister_Occu='$ai',Stu_Email='$aj',Stu_Physics='$ak',Stu_Chemistry='$al',Stu_Maths='$am',Stu_12th_medium='$an',Stu_Diploma_CGPA='$ao',Stu_Barcode='$ap',Stu_Membar_Code='$aq' where Stu_Student_Enrollment_No='$e'";
			move_uploaded_file($Stu_img_tmp, "../student-images/" . $e . ".jpg");
		}
	} elseif ($c == "MECHANICAL ENGINEERING") {

		if ($Stu_img == '') {
			$upd = "update me_student_detail set Stu_Year_of_Admission='$a',Stu_Batch='$b',Stu_Branch='$c',Stu_Roll_No='$d',Stu_Student_Enrollment_No='$e',Stu_Firstname='$f',Stu_Middlename='$g',Stu_Lastname='$h',Stu_gender='$i',Stu_Birth_Date='$j',Stu_Age='$k',Stu_Category='$l',Stu_Admission_Category='$m',Stu_Admission_Type='$n',Stu_ACPC_Admitted_Seat='$o',Stu_GUJCET_Roll_No='$p',Stu_ACPC_Merit_Rank='$q',Stu_Temporary_Address='$r',Stu_Temp_City='$s',Stu_Temp_Sate='$t',Stu_Temp_Pincode='$u',Stu_Permanent_Address='$v',Stu_Per_City='$w',Stu_Per_State='$x',Stu_Per_Pincode='$y',Stu_Parents_Phone_No='$z'
		,Stu_Student_Phone_No='$aa',Stu_Father_Edu='$ab',Stu_Father_Occu='$ac',Stu_Mother_Edu='$ad',Stu_Mother_Occu='$ae',Stu_Brother_Edu='$af',Stu_Brother_Occu='$ag',Stu_Sister_Edu='$ah',Stu_Sister_Occu='$ai',Stu_Email='$aj',Stu_Physics='$ak',Stu_Chemistry='$al',Stu_Maths='$am',Stu_12th_medium='$an',Stu_Diploma_CGPA='$ao',Stu_Barcode='$ap',Stu_Membar_Code='$aq' where Stu_Student_Enrollment_No='$e'";
		} else {
			//$upd = "update smd_student_detail set Stu_Year_of_Admission='$Stu_Year_of_Admission',Stu_Batch='$Stu_Batch',Stu_Branch='$Stu_Branch',Stu_Roll_No='$Stu_Roll_No',Stu_Student_Enrollment_No='$Stu_Student_Enrollment_No',Stu_Firstname='$Stu_Firstname',Stu_Middlename='$Stu_Middlename',Stu_Lastname='$Stu_Lastname',Stu_gender='$Stu_Gender',Stu_Birth_Date='$Stu_Birth_Date',stu_age='$Stu_Age',Stu_Category='$Stu_Category',Stu_Admission_Category='$Stu_Admission_Category',Stu_Admission_Type='$Stu_Admission_Type',Stu_ACPC_Admitted_Seat='$Stu_ACPC_Admitted_Seat',Stu_GUJCET_Roll_No='$Stu_GUJCET_Roll_No',Stu_ACPC_Merit_Rank='$Stu_ACPC_Merit_Rank',Stu_Permanent_Address='$Stu_Permanent_Address',Stu_Temporary_Address='$Stu_Temporary_Address',Stu_City='$Stu_City',Stu_Pincode='$Stu_Pincode',Stu_Parents_Phone_No='$Stu_Parents_Phone_No',Stu_Student_Phone_No='$Stu_Student_Phone_No',father_education='$Fat_edu',father_occupation='$Fat_occu',mother_education='$Mon_edu',mother_occupation='$Mon_occu',brother_education='$Bro_edu',brother_occupation='$Bro_occu',sis_education='$Mon_edu',sis_occupation='$Mon_occu',Stu_Guardians_Phone_No='$Stu_Guardians_Phone_No',Stu_Telephone_No='$Stu_Telephone_No',Stu_Email='$Stu_Email',Stu_Physics='$Stu_Physics',Stu_Chemistry='$Stu_Chemistry',Stu_Maths='$Stu_Maths',stu_percentage='$Stu_per',stu_medium='$Stu_med',Stu_Diploma_CGPA='$Stu_Diploma_CGPA',Stu_Barcode='$Stu_Barcode',Stu_Membar_Code='$Stu_Member_code' where Stu_Student_Enrollment_No='$enno'";

			$upd = "update me_student_detail set Stu_Year_of_Admission='$a',Stu_Batch='$b',Stu_Branch='$c',Stu_Roll_No='$d',Stu_Student_Enrollment_No='$e',Stu_Profile_pic='$e',Stu_Firstname='$f',Stu_Middlename='$g',Stu_Lastname='$h',Stu_gender='$i',Stu_Birth_Date='$j',Stu_Age='$k',Stu_Category='$l',Stu_Admission_Category='$m',Stu_Admission_Type='$n',Stu_ACPC_Admitted_Seat='$o',Stu_GUJCET_Roll_No='$p',Stu_ACPC_Merit_Rank='$q',Stu_Temporary_Address='$r',Stu_Temp_City='$s',Stu_Temp_Sate='$t',Stu_Temp_Pincode='$u',Stu_Permanent_Address='$v',Stu_Per_City='$w',Stu_Per_State='$x',Stu_Per_Pincode='$y',Stu_Parents_Phone_No='$z'
			,Stu_Student_Phone_No='$aa',Stu_Father_Edu='$ab',Stu_Father_Occu='$ac',Stu_Mother_Edu='$ad',Stu_Mother_Occu='$ae',Stu_Brother_Edu='$af',Stu_Brother_Occu='$ag',Stu_Sister_Edu='$ah',Stu_Sister_Occu='$ai',Stu_Email='$aj',Stu_Physics='$ak',Stu_Chemistry='$al',Stu_Maths='$am',Stu_12th_medium='$an',Stu_Diploma_CGPA='$ao',Stu_Barcode='$ap',Stu_Membar_Code='$aq' where Stu_Student_Enrollment_No='$e'";
			move_uploaded_file($Stu_img_tmp, "../student-images/" . $e . ".jpg");
		}
	} elseif ($c == "ELECTRICAL ENGINEERING") {

		if ($Stu_img == '') {
			$upd = "update ee_student_detail set Stu_Year_of_Admission='$a',Stu_Batch='$b',Stu_Branch='$c',Stu_Roll_No='$d',Stu_Student_Enrollment_No='$e',Stu_Firstname='$f',Stu_Middlename='$g',Stu_Lastname='$h',Stu_gender='$i',Stu_Birth_Date='$j',Stu_Age='$k',Stu_Category='$l',Stu_Admission_Category='$m',Stu_Admission_Type='$n',Stu_ACPC_Admitted_Seat='$o',Stu_GUJCET_Roll_No='$p',Stu_ACPC_Merit_Rank='$q',Stu_Temporary_Address='$r',Stu_Temp_City='$s',Stu_Temp_Sate='$t',Stu_Temp_Pincode='$u',Stu_Permanent_Address='$v',Stu_Per_City='$w',Stu_Per_State='$x',Stu_Per_Pincode='$y',Stu_Parents_Phone_No='$z'
		,Stu_Student_Phone_No='$aa',Stu_Father_Edu='$ab',Stu_Father_Occu='$ac',Stu_Mother_Edu='$ad',Stu_Mother_Occu='$ae',Stu_Brother_Edu='$af',Stu_Brother_Occu='$ag',Stu_Sister_Edu='$ah',Stu_Sister_Occu='$ai',Stu_Email='$aj',Stu_Physics='$ak',Stu_Chemistry='$al',Stu_Maths='$am',Stu_12th_medium='$an',Stu_Diploma_CGPA='$ao',Stu_Barcode='$ap',Stu_Membar_Code='$aq' where Stu_Student_Enrollment_No='$e'";
		} else {
			//$upd = "update smd_student_detail set Stu_Year_of_Admission='$Stu_Year_of_Admission',Stu_Batch='$Stu_Batch',Stu_Branch='$Stu_Branch',Stu_Roll_No='$Stu_Roll_No',Stu_Student_Enrollment_No='$Stu_Student_Enrollment_No',Stu_Firstname='$Stu_Firstname',Stu_Middlename='$Stu_Middlename',Stu_Lastname='$Stu_Lastname',Stu_gender='$Stu_Gender',Stu_Birth_Date='$Stu_Birth_Date',stu_age='$Stu_Age',Stu_Category='$Stu_Category',Stu_Admission_Category='$Stu_Admission_Category',Stu_Admission_Type='$Stu_Admission_Type',Stu_ACPC_Admitted_Seat='$Stu_ACPC_Admitted_Seat',Stu_GUJCET_Roll_No='$Stu_GUJCET_Roll_No',Stu_ACPC_Merit_Rank='$Stu_ACPC_Merit_Rank',Stu_Permanent_Address='$Stu_Permanent_Address',Stu_Temporary_Address='$Stu_Temporary_Address',Stu_City='$Stu_City',Stu_Pincode='$Stu_Pincode',Stu_Parents_Phone_No='$Stu_Parents_Phone_No',Stu_Student_Phone_No='$Stu_Student_Phone_No',father_education='$Fat_edu',father_occupation='$Fat_occu',mother_education='$Mon_edu',mother_occupation='$Mon_occu',brother_education='$Bro_edu',brother_occupation='$Bro_occu',sis_education='$Mon_edu',sis_occupation='$Mon_occu',Stu_Guardians_Phone_No='$Stu_Guardians_Phone_No',Stu_Telephone_No='$Stu_Telephone_No',Stu_Email='$Stu_Email',Stu_Physics='$Stu_Physics',Stu_Chemistry='$Stu_Chemistry',Stu_Maths='$Stu_Maths',stu_percentage='$Stu_per',stu_medium='$Stu_med',Stu_Diploma_CGPA='$Stu_Diploma_CGPA',Stu_Barcode='$Stu_Barcode',Stu_Membar_Code='$Stu_Member_code' where Stu_Student_Enrollment_No='$enno'";

			$upd = "update ee_student_detail set Stu_Year_of_Admission='$a',Stu_Batch='$b',Stu_Branch='$c',Stu_Roll_No='$d',Stu_Student_Enrollment_No='$e',Stu_Profile_pic='$e',Stu_Firstname='$f',Stu_Middlename='$g',Stu_Lastname='$h',Stu_gender='$i',Stu_Birth_Date='$j',Stu_Age='$k',Stu_Category='$l',Stu_Admission_Category='$m',Stu_Admission_Type='$n',Stu_ACPC_Admitted_Seat='$o',Stu_GUJCET_Roll_No='$p',Stu_ACPC_Merit_Rank='$q',Stu_Temporary_Address='$r',Stu_Temp_City='$s',Stu_Temp_Sate='$t',Stu_Temp_Pincode='$u',Stu_Permanent_Address='$v',Stu_Per_City='$w',Stu_Per_State='$x',Stu_Per_Pincode='$y',Stu_Parents_Phone_No='$z'
			,Stu_Student_Phone_No='$aa',Stu_Father_Edu='$ab',Stu_Father_Occu='$ac',Stu_Mother_Edu='$ad',Stu_Mother_Occu='$ae',Stu_Brother_Edu='$af',Stu_Brother_Occu='$ag',Stu_Sister_Edu='$ah',Stu_Sister_Occu='$ai',Stu_Email='$aj',Stu_Physics='$ak',Stu_Chemistry='$al',Stu_Maths='$am',Stu_12th_medium='$an',Stu_Diploma_CGPA='$ao',Stu_Barcode='$ap',Stu_Membar_Code='$aq' where Stu_Student_Enrollment_No='$e'";
			move_uploaded_file($Stu_img_tmp, "../student-images/" . $e . ".jpg");
		}
	} elseif ($c == "INFORMATION TECHNOLOGY") {

		if ($Stu_img == '') {
			$upd = "update it_student_detail set Stu_Year_of_Admission='$a',Stu_Batch='$b',Stu_Branch='$c',Stu_Roll_No='$d',Stu_Student_Enrollment_No='$e',Stu_Firstname='$f',Stu_Middlename='$g',Stu_Lastname='$h',Stu_gender='$i',Stu_Birth_Date='$j',Stu_Age='$k',Stu_Category='$l',Stu_Admission_Category='$m',Stu_Admission_Type='$n',Stu_ACPC_Admitted_Seat='$o',Stu_GUJCET_Roll_No='$p',Stu_ACPC_Merit_Rank='$q',Stu_Temporary_Address='$r',Stu_Temp_City='$s',Stu_Temp_Sate='$t',Stu_Temp_Pincode='$u',Stu_Permanent_Address='$v',Stu_Per_City='$w',Stu_Per_State='$x',Stu_Per_Pincode='$y',Stu_Parents_Phone_No='$z'
		,Stu_Student_Phone_No='$aa',Stu_Father_Edu='$ab',Stu_Father_Occu='$ac',Stu_Mother_Edu='$ad',Stu_Mother_Occu='$ae',Stu_Brother_Edu='$af',Stu_Brother_Occu='$ag',Stu_Sister_Edu='$ah',Stu_Sister_Occu='$ai',Stu_Email='$aj',Stu_Physics='$ak',Stu_Chemistry='$al',Stu_Maths='$am',Stu_12th_medium='$an',Stu_Diploma_CGPA='$ao',Stu_Barcode='$ap',Stu_Membar_Code='$aq' where Stu_Student_Enrollment_No='$e'";
		} else {
			//$upd = "update smd_student_detail set Stu_Year_of_Admission='$Stu_Year_of_Admission',Stu_Batch='$Stu_Batch',Stu_Branch='$Stu_Branch',Stu_Roll_No='$Stu_Roll_No',Stu_Student_Enrollment_No='$Stu_Student_Enrollment_No',Stu_Firstname='$Stu_Firstname',Stu_Middlename='$Stu_Middlename',Stu_Lastname='$Stu_Lastname',Stu_gender='$Stu_Gender',Stu_Birth_Date='$Stu_Birth_Date',stu_age='$Stu_Age',Stu_Category='$Stu_Category',Stu_Admission_Category='$Stu_Admission_Category',Stu_Admission_Type='$Stu_Admission_Type',Stu_ACPC_Admitted_Seat='$Stu_ACPC_Admitted_Seat',Stu_GUJCET_Roll_No='$Stu_GUJCET_Roll_No',Stu_ACPC_Merit_Rank='$Stu_ACPC_Merit_Rank',Stu_Permanent_Address='$Stu_Permanent_Address',Stu_Temporary_Address='$Stu_Temporary_Address',Stu_City='$Stu_City',Stu_Pincode='$Stu_Pincode',Stu_Parents_Phone_No='$Stu_Parents_Phone_No',Stu_Student_Phone_No='$Stu_Student_Phone_No',father_education='$Fat_edu',father_occupation='$Fat_occu',mother_education='$Mon_edu',mother_occupation='$Mon_occu',brother_education='$Bro_edu',brother_occupation='$Bro_occu',sis_education='$Mon_edu',sis_occupation='$Mon_occu',Stu_Guardians_Phone_No='$Stu_Guardians_Phone_No',Stu_Telephone_No='$Stu_Telephone_No',Stu_Email='$Stu_Email',Stu_Physics='$Stu_Physics',Stu_Chemistry='$Stu_Chemistry',Stu_Maths='$Stu_Maths',stu_percentage='$Stu_per',stu_medium='$Stu_med',Stu_Diploma_CGPA='$Stu_Diploma_CGPA',Stu_Barcode='$Stu_Barcode',Stu_Membar_Code='$Stu_Member_code' where Stu_Student_Enrollment_No='$enno'";

			$upd = "update it_student_detail set Stu_Year_of_Admission='$a',Stu_Batch='$b',Stu_Branch='$c',Stu_Roll_No='$d',Stu_Student_Enrollment_No='$e',Stu_Profile_pic='$e',Stu_Firstname='$f',Stu_Middlename='$g',Stu_Lastname='$h',Stu_gender='$i',Stu_Birth_Date='$j',Stu_Age='$k',Stu_Category='$l',Stu_Admission_Category='$m',Stu_Admission_Type='$n',Stu_ACPC_Admitted_Seat='$o',Stu_GUJCET_Roll_No='$p',Stu_ACPC_Merit_Rank='$q',Stu_Temporary_Address='$r',Stu_Temp_City='$s',Stu_Temp_Sate='$t',Stu_Temp_Pincode='$u',Stu_Permanent_Address='$v',Stu_Per_City='$w',Stu_Per_State='$x',Stu_Per_Pincode='$y',Stu_Parents_Phone_No='$z'
			,Stu_Student_Phone_No='$aa',Stu_Father_Edu='$ab',Stu_Father_Occu='$ac',Stu_Mother_Edu='$ad',Stu_Mother_Occu='$ae',Stu_Brother_Edu='$af',Stu_Brother_Occu='$ag',Stu_Sister_Edu='$ah',Stu_Sister_Occu='$ai',Stu_Email='$aj',Stu_Physics='$ak',Stu_Chemistry='$al',Stu_Maths='$am',Stu_12th_medium='$an',Stu_Diploma_CGPA='$ao',Stu_Barcode='$ap',Stu_Membar_Code='$aq' where Stu_Student_Enrollment_No='$e'";
			move_uploaded_file($Stu_img_tmp, "../student-images/" . $e . ".jpg");
		}
	}


	$ex = $conn->query($upd);
	if (!$ex) {
		echo "<script>alert('Error In Data Updation')</script>";
	} else {
		echo "<script>alert('Thank You For Updation...')</script>";
		echo "<script>setTimeout(function(){window.location='be_manage-students.php'},100)</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<script type="text/javascript" src="css/bootstrap-imageupload.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>
		function getSeater(val) {
			$.ajax({
				type: "POST",
				url: "get_seater.php",
				data: 'roomid=' + val,
				success: function(data) {
					//alert(data);
					$('#seater').val(data);
				}
			});

			$.ajax({
				type: "POST",
				url: "get_seater.php",
				data: 'rid=' + val,
				success: function(data) {
					//alert(data);
					$('#fpm').val(data);
				}
			});
		}
	</script>
</head>
<?php
include "includes/link.php";
include "includes/navigationbar.php";
include "includes/sidebar.php";
?>
<div id="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#">Dashboard</a>
			</li>
			<li class="breadcrumb-item active">Edit Record</li>
		</ol>

		<!-- Icon Cards-->
		<div class="row">
			<div class="col-md-12">

				<div class="row">
					<div class="col-md-12">
						<div class="card mb-3">
							<div class="card-header">
								<i class="fas fa-fw fa fa-user"></i>Edit Student Detail
							</div>
							<div class="card-body">
								<?php
								$id = $_GET['id'];
								$branch = $_GET['branch'];

								if ($branch == "COMPUTER ENGINEERING") {
									$ret = "select * from ce_student_detail where Stu_Student_Enrollment_No='$id'";
									$result = mysqli_query($conn, $ret) or die(mysqli_error($conn));
								} elseif ($branch == "ELECTRICAL ENGINEERING") {
									$ret = "select * from ee_student_detail where Stu_Student_Enrollment_No='$id'";
									$result = mysqli_query($conn, $ret) or die(mysqli_error($conn));
									//$res=mysqli_fetch_array($result);
								} elseif ($branch == "INFORMATION TECHNOLOGY") {
									$ret = "select * from it_student_detail where Stu_Student_Enrollment_No='$id'";
									$result = mysqli_query($conn, $ret) or die(mysqli_error($conn));
									//$res=mysqli_fetch_array($result);
								} elseif ($branch == "MECHANICAL ENGINEERING") {
									$ret = "select * from me_student_detail where Stu_Student_Enrollment_No='$id'";
									$result = mysqli_query($conn, $ret) or die(mysqli_error($conn));
									//$res=mysqli_fetch_array($result);
								} elseif ($branch == "CIVIL ENGINEERING") {
									$ret = "select * from civil_student_detail where Stu_Student_Enrollment_No='$id'";
									$result = mysqli_query($conn, $ret) or die(mysqli_error($conn));
									//$res=mysqli_fetch_array($result);
								}


								//$cnt=1;
								while ($row = mysqli_fetch_array($result)) {
								?>
									<form method="POST" action="" class="form-horizontal" enctype="multipart/form-data">


										<div class="form-group">
											<label class="col-sm-4 control-label">
												<h4 style="color: green" ;align="left">Admission Related info </h4>
											</label>
										</div>

										<div class="form-group">
											<div class="form-row">
												<label class="col-md-2 control-label">Year of Admission :</label>
												<div class="col-md-10">
													<input type="text" name="stu_adm_year" id="stu_adm_year" value="<?php echo $row['Stu_Year_of_Admission']; ?>" class="form-control">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="form-row">
												<label class="col-md-2 control-label">Batch :</label>
												<div class="col-md-10">
													<input type="text" name="stu_adm_batch" id="stu_adm_batch" value="<?php echo $row['Stu_Batch']; ?>" class="form-control">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="form-row">
												<label class="col-md-2 control-label">Branch :</label>
												<div class="col-md-10">
													<select name="stu_branch" id="stu_branch" class="form-control" onChange="getSeater(this.value);" onBlur="checkAvailability()" required>
														<option value="<?php echo $row['Stu_Branch']; ?>">
															<?php echo $row['Stu_Branch']; ?></option>

													</select>
													<span id="room-availability-status" style="font-size:12px;"></span>
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="form-row">
												<label class="col-md-2 control-label">Roll No : </label>
												<div class="col-md-10">
													<input type="text" name="stu_roll" id="stu_roll" class="form-control" value="<?php echo $row['Stu_Roll_No']; ?>" required="required">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="form-row">
												<label class="col-md-2 control-label">Enrollment No : </label>
												<div class="col-md-10">
													<input type="text" name="stu_enrollment" id="stu_enrollment" value="<?php echo $row['Stu_Student_Enrollment_No']; ?>" class="form-control" required="required" pattern="[0-9A-Za-z]{7,12}">
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-4 control-label">
												<h4 style="color: green" align="left">Student Personal Details </h4>
											</label>
										</div>


										<!-- Image Upload Start -->

										<div class="form-group">
											<div class="form-row">
												<label for="form_name" class="col-md-2 control-label">Student Image
													:</label>
												<div class="col-md-10">
													<div id="wrapper" style="margin-top: 20px;"><input id="fileUpload" name="stu_image" multiple="multiple" type="file" />
														<div id="image-holder"></div>
													</div>
												</div>
											</div>
										</div>
										<!-- Image Upload Start -->


										<div class="form-group">
											<div class="form-row">
												<label class="col-md-2 control-label">First Name : </label>
												<div class="col-md-10">
													<input type="text" name="stu_fname" id="stu_fname" value="<?php echo $row['Stu_Firstname']; ?>" class="form-control" required="required" pattern="[a-zA-Z]{3,20}">

												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="form-row">
												<label class="col-md-2 control-label">Middle Name : </label>
												<div class="col-md-10">
													<input type="text" name="stu_mname" id="stu_mname" value="<?php echo $row['Stu_Middlename']; ?>" pattern="[a-zA-Z]{3,20}" class="form-control">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="form-row">
												<label class="col-md-2 control-label">Last Name : </label>
												<div class="col-md-10">
													<input type="text" name="stu_lname" id="stu_lname" value="<?php echo $row['Stu_Lastname']; ?>" pattern="[a-zA-Z]{3,25}" class="form-control" required="required">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="form-row">
												<label class="col-md-2 control-label">Gender : </label>
												<div class="col-md-10">
													<input type="radio" id="stu_gender" name="stu_gender" class="inline-radio" required="required" value="MALE" <?php
																																								if ($row['Stu_gender'] == 'MALE') {
																																								?> checked="checked" ; <?php
																																								}
						?>><span>MALE</span>


													&nbsp;&nbsp;&nbsp;<input id="stu_gender" type="radio" name="stu_gender" class="inline-radio" required="required" value="FEMALE" <?php
																																													if ($row['Stu_gender'] == 'FEMALE') {
																																													?> checked="checked" ; <?php
																																													}
						?>><span>FEMALE</span>
													&nbsp;&nbsp;&nbsp;<input id="stu_category" type="radio" name="stu_gender" class="inline-radio" required="required" value="OTHERS" <?php
																																														if ($row['Stu_gender'] == 'OTHERS') {
																																														?> checked="checked" ; <?php
																																														}
						?>><span>OTHERS</span>
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="form-row">
												<label class="col-md-2 control-label">Birthdate: </label>
												<div class="col-md-10">
													<input type="text" name="stu_bdate" id="stu_bdate" value="<?php echo $row['Stu_Birth_Date']; ?>" class="form-control">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="form-row">
												<label class="col-md-2 control-label">Age :</label>
												<div class="col-md-10">
													<input type="text" name="stu_age" id="stu_age" value="<?php echo $row['Stu_Age']; ?>" class="form-control">
												</div>
											</div>
										</div>


										<div class="form-group">
											<div class="form-row">
												<label class="col-md-2 control-label">Category :</label>
												<br />
												<div class="col-md-10">
													<input type="radio" id="stu_category" name="stu_category" class="inline-radio" required="required" value="GENERAL/OPEN" <?php
																																											if ($row['Stu_Category'] == 'GENERAL/OPEN') {
																																											?> checked="checked" ; <?php
																																											}
						?>><span>GENERAL/OPEN</span>


													&nbsp;&nbsp;&nbsp;<input id="stu_category" type="radio" name="stu_category" class="inline-radio" required="required" value="SC" <?php
																																													if ($row['Stu_Category'] == 'SC') {
																																													?> checked="checked" ; <?php
																																													}
						?>><span>SC</span>
													&nbsp;&nbsp;&nbsp;<input id="stu_category" type="radio" name="stu_category" class="inline-radio" required="required" value="SEBC/OBC" <?php
																																															if ($row['Stu_Category'] == 'SEBC/OBC') {
																																															?> checked="checked" ; <?php
																																															}
						?>><span>SEBC/OBC</span>
													&nbsp;&nbsp;&nbsp;<input id="stu_category" type="radio" name="stu_category" class="inline-radio" required="required" value="ST" <?php
																																													if ($row['Stu_Category'] == 'ST') {
																																													?> checked="checked" ; <?php
																																													}
						?>><span>ST</span>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-4 control-label">
												<h4 style="color: green" align="left">Admission Details </h4>
											</label>
										</div>


										<div class="form-group">
											<div class="form-row">
												<label class="col-md-2 control-label">Admission Category :</label>
												<div class="col-md-10">
													<input type="radio" id="stu_ad_category" name="stu_ad_category" class="inline-radio" required="required" value="Regular" <?php
																																												if ($row['Stu_Admission_Category'] == 'REGULAR') {
																																												?> checked="checked" ; <?php
																																												}
						?>><span>Regular</span>
													&nbsp;&nbsp;&nbsp;<input type="radio" id="stu_ad_category" name="stu_ad_category" class="inline-radio" required="required" value="D2D" <?php
																																															if ($row['Stu_Admission_Category'] == 'D2D') {
																																															?> checked="checked" ; <?php
																																															}
						?>><span>D2D</span>

													&nbsp;&nbsp;&nbsp;<input type="radio" id="stu_ad_category" name="stu_ad_category" class="inline-radio" required="required" value="Institute Transfer" <?php
																																																			if ($row['Stu_Admission_Category'] == 'Institute Transfer') {
																																																			?> checked="checked" ; <?php
																																																			}
						?>><span>Institute Transfer</span>

												</div>
											</div>

											<div class="col-md-12">
												<div class="form-group">
													<div class="form-row">
														<label class="col-sm-2 control-label">Admission Type :</label>
														<br />
														<div class="col-md-10">
															<input type="radio" id="stu_add_type" name="stu_add_type" class="inline-radio" required="required" value="SQ" <?php
																																											if ($row['Stu_Admission_Type'] == 'SQ') {
																																											?> checked="checked" ; <?php
																																											}
						?>><span>SQ</span>

															&nbsp;&nbsp;&nbsp;<input type="radio" id="stu_add_type" name="stu_add_type" required="required" class="inline-radio" value="TFW" <?php
																																																if ($row['Stu_Admission_Type'] == 'TFW') {
																																																?> checked="checked" ; <?php
																																																}
						?>><span>TFW</span>
															&nbsp;&nbsp;&nbsp;<input type="radio" id="stu_add_type" name="stu_add_type" required="required" class="inline-radio" value="MQ" <?php
																																															if ($row['Stu_Admission_Type'] == 'MQ') {
																																															?> checked="checked" ; <?php
																																															}
						?>><span>MQ</span>
															&nbsp;&nbsp;&nbsp;<input type="radio" id="stu_add_type" name="stu_add_type" required="required" class="inline-radio" value="VQ" <?php
																																															if ($row['Stu_Admission_Type'] == 'VQ') {
																																															?> checked="checked" ; <?php
																																															}
						?>><span>VQ</span>
															&nbsp;&nbsp;&nbsp;<input type="radio" id="stu_add_type" name="stu_add_type" required="required" class="inline-radio" value="MQ to SQ" <?php
																																																	if ($row['Stu_Admission_Type'] == 'MQ to SQ') {
																																																	?> checked="checked" ; <?php
																																																	}
						?>><span>MQ to SQ</span>
															&nbsp;&nbsp;&nbsp;<input type="radio" id="stu_add_type" name="stu_add_type" required="required" class="inline-radio" value="VQ to SQ" <?php
																																																	if ($row['Stu_Admission_Type'] == 'VQ to SQ') {
																																																	?> checked="checked" ; <?php
																																																	}
						?>><span>VQ to SQ</span>
															&nbsp;&nbsp;&nbsp;<input type="radio" id="stu_add_type" name="stu_add_type" required="required" class="inline-radio" value="Institute Transfer" <?php
																																																			if ($row['Stu_Admission_Type'] == 'Institute Transfer') {
																																																			?> checked="checked" ; <?php
																																																			}
						?>><span>Institute Transfer</span>
														</div>
													</div>
												</div>
											</div>

										</div>


										<div class="form-group">
											<div class="form-row">
												<label class="col-md-2 control-label">ACPC Admitted Seat :</label>
												<br />
												<div class="col-md-10">
													<input type="radio" id="stu_acpc_adm_seat" name="stu_acpc_adm_seat" class="inline-radio" required="required" value="OPEN" <?php
																																												if ($row['Stu_ACPC_Admitted_Seat'] == 'OPEN') {
																																												?> checked="checked" ; <?php
																																												}
						?>><span>OPEN</span>
													&nbsp;&nbsp;&nbsp;<input type="radio" id="stu_acpc_adm_seat" name="stu_acpc_adm_seat" required="required" class="inline-radio" value="TFW" <?php
																																																if ($row['Stu_ACPC_Admitted_Seat'] == 'TFW') {
																																																?> checked="checked" ; <?php
																																																}
						?>><span>TFW</span>
													&nbsp;&nbsp;&nbsp;<input type="radio" id="stu_acpc_adm_seat" name="stu_acpc_adm_seat" class="inline-radio" required="required" value="MQ" <?php
																																																if ($row['Stu_ACPC_Admitted_Seat'] == 'MQ') {
																																																?> checked="checked" ; <?php
																																																}
						?>><span>MQ</span>
													&nbsp;&nbsp;&nbsp;<input type="radio" id="stu_acpc_adm_seat" name="stu_acpc_adm_seat" class="inline-radio" required="required" value="VQ" <?php
																																																if ($row['Stu_ACPC_Admitted_Seat'] == 'VQ') {
																																																?> checked="VQ" ; <?php
																																																}
					?>><span>VQ</span>
												</div>
											</div>
										</div>






										<div class="form-group">
											<div class="form-row">
												<label class="col-md-2 control-label">GUJCET/JEE Roll NO : </label>
												<div class="col-md-10">
													<input type="text" name="stu_gujcet_roll_no" id="stu_gujcet_roll_no" class="form-control" value="<?php echo $row['Stu_GUJCET_Roll_No']; ?>">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="form-row">
												<label class="col-md-2 control-label">ACPC Merit Rank : </label>
												<div class="col-md-10">
													<input type="text" name="stu_acpc_merit_rank" id="stu_acpc_merit_rank" class="form-control" value="<?php echo $row['Stu_ACPC_Merit_Rank']; ?>">
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-4 control-label">
												<h4 style="color: green" align="left">Temporary Address </h4>
											</label>
										</div>


										<div class="form-group">
											<div class="form-row">
												<label class="col-md-2 control-label">Address : </label>
												<div class="col-md-10">
													<textarea rows="5" name="stu_temp_add" id="stu_temp_add" class="form-control" required="required"><?php echo $row['Stu_Temporary_Address']; ?></textarea>
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="form-row">
												<label class="col-sm-2 control-label">City : </label>
												<div class="col-sm-10">
													<input type="text" name="stu_temp_city" id="stu_temp_city" value="<?php echo $row['Stu_Temp_City']; ?> " class="form-control" required="required">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="form-row">
												<label class="col-md-2 control-label">State :</label>
												<div class="col-md-10">
													<input type="text" name="stu_temp_state" id="stu_temp_state" value="<?php echo $row['Stu_Temp_Sate']; ?>" class="form-control" required="required">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="form-row">
												<label class="col-md-2 control-label">Pincode : </label>
												<div class="col-md-10">
													<input type="text" name="stu_temp_pincode" id="stu_temp_pincode" value="<?php echo $row['Stu_Temp_Pincode']; ?> " class="form-control" required="required">
												</div>
											</div>
										</div>

										<div class="form-group">

											<label class="col-md-4 control-label">
												<h4 style="color: green" align="left">Permanent Address </h4>
											</label>

										</div>


										<div class="form-group">
											<div class="form-row">
												<label class="col-sm-5 control-label">Permanent Address same as Temporary
													address : </label>
												<div class="col-sm-4">
													<input type="checkbox" name="adcheck" value="1" />
												</div>
											</div>
										</div>


										<div class="form-group">
											<div class="form-row">
												<label class="col-md-2 control-label">Address : </label>
												<div class="col-md-10">
													<textarea rows="5" name="stu_per_add" id="stu_per_add" class="form-control" required="required"><?php echo $row['Stu_Permanent_Address']; ?></textarea>
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="form-row">
												<label class="col-md-2 control-label">City : </label>
												<div class="col-md-10">
													<input type="text" name="stu_per_city" id="stu_per_city" value="<?php echo $row['Stu_Per_City']; ?>" class="form-control" required="required">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="form-row">
												<label class="col-md-2 control-label">State : </label>
												<div class="col-md-10">
													<input type="text" name="stu_per_state" id="stu_per_state" value="<?php echo $row['Stu_Per_State']; ?>" class="form-control" required="required">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="form-row">
												<label class="col-sm-2 control-label">Pincode : </label>
												<div class="col-sm-10">
													<input type="text" name="stu_per_pincode" id="stu_per_pincode" value="<?php echo $row['Stu_Per_Pincode']; ?>" class="form-control" required="required">
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-4 control-label">
												<h4 style="color: green" ;align="left">Student Family Details </h4>
											</label>
										</div>

										<div class="form-group">
											<div class="form-row">
												<label class="col-md-2 control-label">Parents Contact No : </label>
												<div class="col-md-10">
													<input type="text" name="stu_parents_phone" id="stu_parents_phone" class="form-control" value="<?php echo $row['Stu_Parents_Phone_No']; ?>" pattern="[6789][0-9]{9}" required="required">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="form-row">
												<label class="col-sm-2 control-label">Student Contact No : </label>
												<div class="col-sm-10">
													<input type="text" name="stu_phone" id="stu_phone" class="form-control" value="<?php echo $row['Stu_Student_Phone_No']; ?>" pattern="[6789][0-9]{9}" required="required">
												</div>
											</div>
										</div>


										<div class="form-group">
											<div class="form-row">
												<label class="col-sm-2 control-label">Father Education : </label>
												<div class="col-sm-10">
													<input type="text" name="stu_father_edu" id="stu_father_edu" value="<?php echo $row['Stu_Father_Edu']; ?>" class="form-control">
												</div>
											</div>
										</div>


										<div class="form-group">
											<div class="form-row">
												<label class="col-sm-2 control-label">Father Occupation : </label>
												<div class="col-sm-10">
													<input type="text" name="stu_father_occu" id="stu_father_occu" value="<?php echo $row['Stu_Father_Occu']; ?>" class="form-control">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="form-row">
												<label class="col-sm-2 control-label">Mother Education : </label>
												<div class="col-sm-10">
													<input type="text" name="stu_mother_edu" id="stu_mother_edu" class="form-control" value="<?php echo $row['Stu_Mother_Edu']; ?>">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="form-row">
												<label class="col-sm-2 control-label">Mother Occupation : </label>
												<div class="col-sm-10">
													<input type="text" name="stu_mother_occu" id="stu_mother_occu" class="form-control" value="<?php echo $row['Stu_Mother_Occu']; ?>">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="form-row">
												<label class="col-sm-2 control-label">Brother Education : </label>
												<div class="col-sm-10">
													<input type="text" name="stu_brother_edu" id="stu_brother_edu" class="form-control" value="<?php echo $row['Stu_Brother_Edu']; ?>">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="form-row">
												<label class="col-sm-2 control-label"> Brother Occupation : </label>
												<div class="col-sm-10">
													<input type="text" name="stu_brother_occu" id="stu_brother_occu" class="form-control" value="<?php echo $row['Stu_Brother_Occu']; ?>">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="form-row">
												<label class="col-sm-2 control-label">Sister Education: </label>
												<div class="col-sm-10">
													<input type="text" name="stu_sister_edu" id="stu_sister_edu" class="form-control" value="<?php echo $row['Stu_Sister_Edu']; ?>">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="form-row">
												<label class="col-md-2 control-label">Sister Occupation : </label>
												<div class="col-md-10">
													<input type="text" name="stu_sister_occu" id="stu_sister_occu" class="form-control" value="<?php echo $row['Stu_Sister_Occu']; ?> ">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="form-row">
												<label class="col-md-2 control-label">Email id : </label>
												<div class="col-md-10">
													<input type="email" name="stu_email" id="stu_email" class="form-control" value="<?php echo $row['Stu_Email']; ?>" required="required">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="form-row">
												<label class="col-md-4 control-label">
													<h4 style="color: green" ;align="left">12th Result Details </h4>
												</label>
											</div>
										</div>

										<div class="form-group">
											<div class="form-row">
												<label class="col-md-2 control-label">Physics : </label>
												<div class="col-md-10">
													<input type="text" name="stu_phy_mark" id="stu_phy_mark" class="form-control" value="<?php echo $row['Stu_Physics']; ?>">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="form-row">
												<label class="col-sm-2 control-label">Chemistery : </label>
												<div class="col-sm-10">
													<input type="text" name="stu_che_mark" id="stu_che_mark" class="form-control" value="<?php echo $row['Stu_Chemistry']; ?>">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="form-row">
												<label class="col-sm-2 control-label">Maths : </label>
												<div class="col-sm-10">
													<input type="text" name="stu_maths_mark" id="stu_maths_mark" class="form-control" value="<?php echo $row['Stu_Maths']; ?>">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="form-row">
												<label class="col-sm-2 control-label">12th Medium : </label>
												<div class="col-sm-10">
													<input type="radio" id="stu_12th_medium" name="stu_12th_medium" class="inline-radio" required="required" value="ENGLISH" <?php
																																												if ($row['Stu_12th_medium'] == 'ENGLISH') {
																																												?> checked="checked" ; <?php
																																												}
						?>><span>ENGLISH</span>


													&nbsp;&nbsp;&nbsp;<input id="stu_12th_medium" type="radio" name="stu_12th_medium" class="inline-radio" required="required" value="GUJARATI" <?php
																																																if ($row['Stu_12th_medium'] == 'GUJARATI') {
																																																?> checked="checked" ; <?php
																																																}
						?>><span>GUJARATI</span>
													&nbsp;&nbsp;&nbsp;<input id="stu_12th_medium" type="radio" name="stu_12th_medium" class="inline-radio" required="required" value="HINDI" <?php
																																																if ($row['Stu_12th_medium'] == 'HINDI') {
																																																?> checked="checked" ; <?php
																																																}
						?>><span>HINDI</span>
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="form-row">
												<label class="col-sm-2 control-label">Diploma CGPA : </label>
												<div class="col-sm-10">
													<input type="text" name="stu_dip_CGPA" id="stu_dip_CGPA" class="form-control" value="<?php echo $row['Stu_Diploma_CGPA']; ?>">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="form-row">
												<label class="col-md-4 control-label">
													<h4 style="color: green" align="left">Barcode Details </h4>
												</label>
											</div>
										</div>

										<div class="form-group">
											<div class="form-row">
												<label class="col-sm-2 control-label">Barcode : </label>
												<div class="col-sm-10">
													<input type="text" name="stu_barcode" id="stu_barcode" class="form-control" value="<?php echo $row['Stu_Barcode']; ?>">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="form-row">
												<label class="col-sm-2 control-label">Member Code : </label>
												<div class="col-sm-10">
													<input type="text" name="stu_mem_code" id="stu_mem_code" class="form-control" value="<?php echo $row['Stu_Membar_Code']; ?>">
												</div>
											</div>

										</div>

										<div class="col-sm-6 col-sm-offset-4">
											<div class="form-row">
												<button class="btn btn-default" type="submit">Cancel</button>
												<input type="submit" name="update" value="UPDATE" class="btn btn-primary" />
											</div>
										</div>
									</form>
								<?php
								}

								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


</div>
</div>
<!-- /.container-fluid -->

<script type="text/javascript">
	$(document).ready(function() {
		$('input[type="checkbox"]').click(function() {
			if ($(this).prop("checked") == true) {
				$('#stu_per_add').val($('#stu_temp_add').val());
				$('#stu_per_city').val($('#stu_temp_city').val());
				$('#stu_per_state').val($('#stu_temp_state').val());
				$('#stu_per_pincode').val($('#stu_temp_pincode').val());
			}

		});
	});
</script>
<script>
	$(document).ready(function() {
		$("#fileUpload").on('change', function() {
			//Get count of selected files
			var countFiles = $(this)[0].files.length;
			var imgPath = $(this)[0].value;
			var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
			var image_holder = $("#image-holder");
			image_holder.empty();
			if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
				if (typeof(FileReader) != "undefined") {
					//loop for each file selected for uploaded.
					for (var i = 0; i < countFiles; i++) {
						var reader = new FileReader();
						reader.onload = function(e) {
							$("<img />", {
								"src": e.target.result,
								"class": "thumb-image"
							}).appendTo(image_holder);
						}
						image_holder.show();
						reader.readAsDataURL($(this)[0].files[i]);
					}
				} else {
					alert("This browser does not support FileReader.");
				}
			} else {
				alert("Pls select only images");
			}
		});
	});
</script>

<?php

include "includes/script.php";
include "includes/footer.php";
?>